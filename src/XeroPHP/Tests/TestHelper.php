<?php

namespace XeroPHP\Tests;

use Prophecy\Prophet;
use XeroPHP\Remote\Request;
use XeroPHP\Remote\Response;
use XeroPHP\Remote\URL;

class TestHelper
{
    /**
     * @var Prophet
     */
    private $prophet;

    /**
     * @param string $body
     * @param string $class
     * @return Object[]
     */
    public function parseXmlResponse($body, $class)
    {
        $url = $this->prophesize(URL::class);
        $url->isOAuth()->willReturn(false);
        $request = $this->prophesize(Request::class);
        $request->getUrl()->willReturn($url->reveal());
        $response = new Response($request->reveal(), $body, ['content_type' => Request::CONTENT_TYPE_XML, 'http_code' => 200]);
        $response->parse();
        $elements = [];
        foreach ($response->getElements() as $element) {
            /** @var \XeroPHP\Models\Files\Object $built_element */
            $built_element = new $class(null);
            $built_element->fromStringArray($element);
            $elements[] = $built_element;
        }

        return $elements;
    }

    /**
     * @param string|null $classOrInterface
     * @return \Prophecy\Prophecy\ObjectProphecy
     */
    private function prophesize($classOrInterface = null)
    {
        if (!$this->prophet) {
            $this->prophet = new Prophet();
        }

        return $this->prophet->prophesize($classOrInterface);
    }
}
