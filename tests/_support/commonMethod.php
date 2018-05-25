<?php

namespace Helper;

use phpDocumentor\Reflection\Types\Null_;
use Codeception\Lib\Interfaces\Db;

class commonMethod extends \AcceptanceTester
{
    public function readXML($filePath, $parentTag, $childTag, $attributeName)
    {
        //$XMLFile="tests/acceptance/resource/producetStatus.xml";
        $XMLFile = $filePath;

        $xmlstr = simplexml_load_file($XMLFile);

        $statuses = array();

        //foreach($xmlstr->Education[0]->status as $status)

        $a = $attributeName;
        codecept_debug($a);

        foreach ($xmlstr->${"parentTag"}->${"childTag"} as $status) {
            $singleStatus = $status[$attributeName];
            array_push($statuses, $singleStatus);
        }

        $list = array_map(function ($var) {
            return $var->__toString();
        }, $statuses);
        codecept_debug($list);
        return $list;

    }

}


?>