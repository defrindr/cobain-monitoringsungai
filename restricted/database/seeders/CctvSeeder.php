<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cctv;

class CctvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cctv = new Cctv;
        $cctv->location_name = "Argowilis 1";
        $cctv->ip_address = "192.168.0.1";
        $cctv->latitude = -8.0581633547649170;
        $cctv->longitude = 111.8708387204883000;
        $cctv->save();

        $cctv = new Cctv;
        $cctv->location_name = "Argowilis 2";
        $cctv->ip_address = "192.168.0.2";
        $cctv->latitude = -8.0581633547649170;
        $cctv->longitude = 111.8708387204883000;
        $cctv->save();

        $cctv = new Cctv;
        $cctv->location_name = "Argowilis 3";
        $cctv->ip_address = "192.168.0.3";
        $cctv->latitude = -8.0581633547649170;
        $cctv->longitude = 111.8708387204883000;
        $cctv->save();
    }
}
