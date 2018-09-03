<?php

namespace LyApi\extend\Array2Xml;

include "XmlData.php";

class Extend{
    public static function XmlData($name,$data){
        return XmlData::XmlData($name,$data);
    }
}