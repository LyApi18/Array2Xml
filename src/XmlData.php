<?php

namespace LyApi\extend\Xml2Array;

class XmlData{
    public static function XmlData($name,$data){
        throw new CustomException(\Verdant\Array2XML::createXML($name,$data));
    }
}