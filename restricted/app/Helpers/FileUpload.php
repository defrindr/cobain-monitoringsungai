<?php
namespace App\Helpers;

use GuzzleHttp\Exception\ServerException;

class FileUpload {
    public static function exec($file, $name, $target){
        try{
            $filename = "$name.{$file->getClientOriginalExtension()}";
            $path = public_path($target);

            // var_dump($path);
            // die;
            $file->move($path, $filename);

            return [
                'success' => true,
                'path' => "./$target/$filename"
            ];
        }catch(\Throwable $e){
            return [
                "success" => false,
            ];
        }
    }
}