<?php
/**
 * Created by PhpStorm.
 * User: Stas
 * Date: 04.07.2016
 * Time: 11:58
 */
function ipValid($ip) {
    $matches = [];
    $pattern ="/([1-9]\.|[1-9]\d\.|1\d\d\.|25[0-5]\.|2[0-4][0-9]\.)(\.\d|[1-9]\d|1\d\d|25[0-5]|2[0-4][0-9]){3}/";
    preg_match($pattern, $ip, $matches);
    return $matches[0];
}
