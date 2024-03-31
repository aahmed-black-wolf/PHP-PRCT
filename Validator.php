<?php


class Validator{
    public static function string($data,$min  = 1,$max = INF){
         $value = trim($data); 
        return strlen($value) <= $max && strlen($value) >= $min;   
    }

}