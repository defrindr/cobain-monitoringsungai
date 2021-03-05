<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubDistrict;

class SubDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_district = new SubDistrict;
        $sub_district->district_id = 1;
        $sub_district->sub_district_name = "Pulung";
        $sub_district->save();
    }
}
