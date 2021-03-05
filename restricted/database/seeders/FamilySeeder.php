<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Family;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $family = new Family;
        $family->kk = "0101010101";
        $family->member = 0;
        $family->save();
    }
}
