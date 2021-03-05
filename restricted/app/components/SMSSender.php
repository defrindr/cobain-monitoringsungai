<?php
namespace App\components;

class SMSSender
{

    public static function exec($phone_number, $name, $link, $content = null)
    {
        $curl = curl_init();
        $content = ($content) ?? "Hay $name,\n\nKonfirmasi akun Anda atau abaikan pesan ini, jika merasa tidak pernah mendaftar.\n\nHanya berlaku untuk 15 menit kedepan. \n\n$link";
        $headers = [
            CURLOPT_URL => 'https://api.thebigbox.id/sms-otp/1.0.0/otp/889j29cmfehue8v9u28ur92imosidjg8jj984tj',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => '{ "maxAttempt": 0, "masking": { "accountId": "", "senderId": "", "password": "" }, "phoneNum": "'. $phone_number .'", "expireIn": 12312123, "content": "'. $content .'", "digit": 4, "callbackUrl": ""}',
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'x-api-key: 6NUd8B3gcBpzWYkBOafETg5l9QYoHuSx',
                'Accept: application/json',
            ]
        ];

        curl_setopt_array($curl, $headers);

        $response = curl_exec($curl);
        curl_close($curl);
    }
}
