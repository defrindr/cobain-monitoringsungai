<?php
namespace App\Helpers;

class Firebase
{
    public static function sendMessage($registration_ids = [], $message = "this message from firebase", $navigation = null)
    {
        $url = 'https://fcm.googleapis.com/fcm/send';

        $msg = [
            'body' => $message,
            'title' => $message,
            'vibrate' => 1,
            'sound' => "default",
            'largeIcon' => 'large_icon',
            'smallIcon' => 'small_icon',
        ];

        if ($registration_ids != []) {

            $fields = [
                'registration_ids' => $registration_ids,
                'priority' => "high",
                'notification' => $msg,
                'data' => [
                    'message' => $message,
                    "navigation" => $navigation
                ],
            ];

            $headers = [
                'Authorization:key = AAAACr3TzvM:APA91bGV6XjKNzbUU62B-G3iGoRjYuOgoln_bvPdAgexNiSAjJB_a1x2FrPL_i0spcs2dhGNJmJKi_BWNVokl46rmF-YDgQywAzaFuSxWuykEVQrYLeKciYqetXX-J6TqKTps759Y2BB',
                'Content-Type: application/json',
            ];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
            $result = curl_exec($ch);
            if ($result === false) {
                return [
                    "success" => false,
                    "message" => curl_error($ch)
                ];
            }
            curl_close($ch);
            return [
                "success" => true,
                "message" => $result
            ];
        }
    }
}
