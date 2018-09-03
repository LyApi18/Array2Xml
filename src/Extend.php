<?php

namespace LyApi\extend\Xml2Array;

include dirname(__FILE__) . "../vendor/autoload.php";
include dirname(__FILE__) . "XmlData.php";

class Extend{
    public static function XmlData($name,$data){
        return XmlData::XmlData($name,$data);
    }
}