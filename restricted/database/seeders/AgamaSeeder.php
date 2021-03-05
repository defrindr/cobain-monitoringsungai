<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agama;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = ["islam", "kristen", "Katolik", "Hindu", "Buddha", "Kong Hu Chu", "Belum Terdata"];
        foreach($list as $data){
            $agama = new Agama;
            $agama->agama = $data;
            $agama->save();
        }
    }
}
