<?php

namespace App\Http\Resources;

use App\Helpers\DateHelper;
use Illuminate\Http\Resources\Json\JsonResource;

class LogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $fields = [
            // "id" => $this->id,
            "ketinggian_air" => $this->ketinggian_air,
            "volume_baterai" => $this->volume_baterai,
            "jarak_air_dari_sensor" => $this->jarak_air_dari_sensor,
            "sinyal" => $this->sinyal,
        ];

        return $fields;
    }
}
