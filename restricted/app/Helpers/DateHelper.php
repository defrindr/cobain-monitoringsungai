<?php
namespace App\Helpers;

class DateHelper {
    public static function readable($date){
        $strtotime = strtotime($date);
        
        return \Date('d F Y', $strtotime);
    }
}