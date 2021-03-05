<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FamilyStatus;

class FamilyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ["Kepala Keluarga", "Istri", "Anak Kandung", "Anak Angkat", "Cucu", "Saudara", "Family lain"];

        foreach($data as $row){
            $family_status = new FamilyStatus;
            $family_status->status = $row;
            $family_status->save();
        }
    }
}
