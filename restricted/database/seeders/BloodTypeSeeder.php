<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BloodType;
class BloodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_blood = new BloodType;
        $type_blood->blood_type = "A";
        $type_blood->save();

        $type_blood = new BloodType;
        $type_blood->blood_type = "AB";
        $type_blood->save();


        $type_blood = new BloodType;
        $type_blood->blood_type = "B";
        $type_blood->save();

        $type_blood = new BloodType;
        $type_blood->blood_type = "O";
        $type_blood->save();

    }
}
