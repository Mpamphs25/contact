<?php


class Validation{

    public static  function checkString($value, $min=5, $max=20){
       $val = trim($value);
       
       if(strlen($val) >= $min && strlen($val) <=$max){
        return true;
       }
    }

    public static function selectIsEmpty($value){
        return empty($value);
    }
}