<?php
namespace App\components;

class Shorten
{

    public static function link($url)
    {
      $curl = curl_init();

      // $body = "{\"long_url\": \"$url\"}";
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://bugorganizer.id/go/api.php?url=$url",
        // CURLOPT_URL => 'https://api-ssl.bitly.com/v4/shorten',
        CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_ENCODING => '',
        // CURLOPT_MAXREDIRS => 10,
        // CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        // CURLOPT_CUSTOMREQUEST => 'GET',
        // // CURLOPT_POSTFIELDS => $body,
        // CURLOPT_HTTPHEADER => array(
        // // //   'Authorization: Bearer c0018965c8d0a73ec12f2c3baacbd96966325961',
        // //   'Content-Type: application/json'
        // // ),
      ));

      curl_setopt($curl, CURLOPT_HEADER, false);
      $response = curl_exec($curl);
      curl_close($curl);

      if($response){
        return str_replace("\/", "/", explode("\"",explode("\"shorturl\": \"",$response)[1])[0]);
      }
      return "";
    }

}
