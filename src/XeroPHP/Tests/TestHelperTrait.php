<?php

namespace XeroPHP\Tests;

trait TestHelperTrait
{
    /**
     * @var TestHelper
     */
    private $xeroTestHelper;

    /**
     * @param string $body
     * @param string $class
     * @return Object[]
     */
    public function xeroParseXmlResponse($body, $class)
    {
        return $this->getXeroTestHelper()->parseXmlResponse($body, $class);
    }

    /**
     * @return TestHelper
     */
    private function getXeroTestHelper()
    {
        if (!$this->xeroTestHelper) {
            $this->xeroTestHelper = new TestHelper();
        }

        return $this->xeroTestHelper;
    }
}
