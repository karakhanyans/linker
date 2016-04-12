<?php

class MyHelper{
    public static function url($url)
    {
        $parse = parse_url($url);
        return $parse['host'];
    }

}