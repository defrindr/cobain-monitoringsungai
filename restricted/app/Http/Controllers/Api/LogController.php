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
            "ketinggian_air" => "required|numeric",
            "volume_baterai" => "required|numeric",
            "sinyal" => "required|numeric",
            "jarak_air_dari_sensor" => "required|numeric",
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
        $model->jarak_air_dari_sensor = $request->jarak_air_dari_sensor;

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

}
