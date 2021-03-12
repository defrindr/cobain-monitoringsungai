<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LogCollection;
use App\Http\Resources\LogResource;
use Illuminate\Http\Request;
use App\Models\Log;
use Illuminate\Support\Facades\Validator;

class LogController extends Controller
{
    public function index()
    {
        $data = Log::orderBy("created_at", "desc")->paginate();
        return new LogCollection($data);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            "trend_level_sungai" => "required|numeric",
            "trend_voltase_baterai" =>  "required|numeric",
            "volume_baterai" => "required",
            "sinyal" => "required",
            "ketinggian_air" => "required",
        ]);

        if($validator->fails()){
            return response()->json([
                "success" => false,
                "message" => $validator->messages()->first()
            ]);
        }

        $model = new Log;
        $model->ketinggian_air = $request->ketinggian_air;
        $model->volume_baterai = $request->volume_baterai;
        $model->sinyal = $request->sinyal;
        $model->trend_level_sungai = $request->trend_level_sungai;
        $model->trend_voltase_baterai = $request->trend_voltase_baterai;

        try{

            if($model->save()){
                return response()->json([
                    "success" => true,
                    "message" => "Data saved"
                ]);
            }else{
                return response()->json([
                    "success" => false,
                    "message" => "Failed to save data."
                ]);
            }
        }catch(\Throwable $th){
            return response()->json([
                "success" => false,
                "message" => json_encode($th)
            ]);
        }


    }

    public function actionDataTable(){
        $last_data = Log::latest()->first();
        $jam = (int)date("H");
        $jam_mulai = $jam - 6;
        $trend_voltase = [
            "label" => [],
            "data" => []
        ];
        $trend_level = [
            "label" => [],
            "data" => []];

        for($i = $jam_mulai;$i <= $jam;$i++){
            $day_late = 0;
            if($i < 0){
                $day_late = 1;
                $hour = 24 - $i;
            }else $hour = $i;
            
            $trend_level["label"][] = $trend_voltase["label"][] = "$i:00";


            $datetime = date("Y-m-d $hour:00:00");
            if($day_late){
                $date = explode(" ", $datetime);
                $date_parse = explode("-", $date[0]);
                $hari = (int)$date_parse[2] - 1;
                $date = "$date_parse[0]-$date_parse[1]-$hari";
                $datetime = "$date $hour:00:00";
            }
            $datetime = strtotime($datetime);
            $datetime = date("Y-m-d H", $datetime);

            $voltase = Log::where('created_at', 'like', "{$datetime}%")->avg("trend_voltase_baterai");
            $level = Log::where('created_at', 'like', "{$datetime}%")->avg("trend_level_sungai");

            $trend_level["data"][] = (float)$level;
            $trend_voltase["data"][] = (float)$voltase;
        }

        $baterai_arr = explode("/", $last_data->volume_baterai);
        $baterai = floor(((int)$baterai_arr[0] / (int)$baterai_arr[1]) * 6);
        $baterai = ($baterai >= 6) ? 6 : $baterai;
        
        $ketinggian_air_arr = explode("/", $last_data->ketinggian_air);
        $ketinggian_air = floor(((int)$ketinggian_air_arr[0] / (int)$ketinggian_air_arr[1]) * 6);
        $ketinggian_air = ($ketinggian_air >= 6) ? 6 : $ketinggian_air;

        $sinyal_arr = explode("/", $last_data->sinyal);
        $sinyal = floor(((int)$sinyal_arr[0] / (int)$sinyal_arr[1]) * 100);
        $sinyal = ($sinyal >= 100) ? 100 : $sinyal;
        $sinyal_1 = 100 - $sinyal;


        
        return response()->json([
            "success" => true,
            "data" => [
                "baterai" => [
                    "bar" => $baterai,
                    "value" => $last_data->volume_baterai
                ],
                "ketinggian_air" => [
                    "bar" => $ketinggian_air,
                    "value" => $last_data->ketinggian_air
                ],
                "sinyal" => [
                    "data" => [$sinyal, $sinyal_1],
                    "bar" => $sinyal,
                    "value" => $last_data->sinyal
                ],
                "trend_voltase" => $trend_voltase,
                "trend_level" => $trend_level,
            ]
        ]);
    }

}
