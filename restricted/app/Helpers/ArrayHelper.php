<?php
namespace App\Helpers;

use Exception;

class ArrayHelper {
    public static function map($source, $key, $value){
        $new_arr = [];
        if(strtolower(gettype($source)) != "object") throw new Exception("Source isnt valid array type");

        try{
            foreach($source as $data) $new_arr[$data->$key] = $data->$value;

            return $new_arr;
        }catch(Exception $e){
            throw new Exception($e);
        }
    }
}