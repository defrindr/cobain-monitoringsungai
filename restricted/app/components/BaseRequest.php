<?php
namespace App\components;

class BaseRequest {
    public $output;
    public $base;
    public $url;

    public static function http_request($url, $custom_header = [], $post = false,$datafield = ""){
        $ch = curl_init();
        $header = [
            'Accept: application/json',
            'Accept-Encoding: gzip, deflate',
            'Accept-Language: en-US,en;q=0.5',
            'Cache-Control: no-cache',
            'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
        ];

        $header = array_merge($header, $custom_header);

        curl_setopt($ch, CURLOPT_URL, $url);
        if($post){
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $datafield);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header); 
        $output = curl_exec($ch);
        curl_close($ch);

        return BaseRequest::toObject($output);
    }

    public static function toObject($data){
        return (object)json_decode($data);
    }
}