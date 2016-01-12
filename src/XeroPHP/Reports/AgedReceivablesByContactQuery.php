<?php
namespace XeroPHP\Reports;

use XeroPHP\Application;
use XeroPHP\Remote\Request;
use XeroPHP\Remote\URL;

class AgedReceivablesByContactQuery
{
    /**
     * @var Application
     */
    private $application;

    /**
     * @var string
     */
    private $contactGuid;

    public function __construct(Application $application, $contactGuid)
    {
        $this->application = $application;
        $this->contactGuid = $contactGuid;
    }

    /**
     * @return AgedReceivablesByContact
     */
    public function execute()
    {
        $url = new URL($this->application, 'https://api.xero.com/api.xro/2.0/Reports/AgedReceivablesByContact');
        $request = new Request($this->application, $url, 'GET');
        $request->setParameter('contactID', $this->contactGuid);
        $request->send();
        $elements = $request->getResponse()->getElements();
        $headers = [];
        $data = [];
        foreach ($elements[0]['Rows'] as $row) {
            if ($row['RowType'] == 'Header') {
                $headers = $this->parseCells($row['Cells']);
            } elseif ($row['RowType'] == 'Section') {
                foreach ($row['Rows'] as $index => $subRow) {
                    $data[$index] = $this->parseCells($subRow['Cells']);
                }
            }
        }

        return new AgedReceivablesByContact($headers, $data);
    }

    /**
     * @param array $cells
     * @return string|null
     */
    private function parseCells($cells)
    {
        $row = [];
        foreach ($cells as $index => $cell) {
            $row[$index] = $this->parseCell($cell);
        }

        return $row;
    }

    /**
     * @param array $cell
     * @return string|null
     */
    private function parseCell($cell)
    {
        if (isset($cell['Value'])) {
            return $cell['Value'];
        }

        return null;
    }
}
