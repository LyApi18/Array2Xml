<?php

namespace LyApi\extend\Array2XML;

include "Array2XML.php";

class Extend{
    public static function XMLData($root,$data){
        $xml =  Array2XML::createXML($root,$data);
        return $xml->saveXML();
    }
}