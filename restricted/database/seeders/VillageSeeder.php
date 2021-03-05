<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Village;
class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $village = new Village;
        $village->sub_district_id = 1;
        $village->village_name = "Pulung";
        $village->save();
    }
}
