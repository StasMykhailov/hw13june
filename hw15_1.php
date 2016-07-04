<?php
/**
 * Created by PhpStorm.
 * User: Stas
 * Date: 20.06.2016
 * Time: 17:57
 */
function macAdressValid($str){
    $pattern = "/\b\d{2}:\d{2}:[a-z]\d:\d{2}:\d{2}:\d{2}\b/";
    if (preg_match($pattern, $str)) {
        $res = "valid";
    } else {
        $res = "not valid";
    }
    return $res;
}
