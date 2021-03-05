<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OutgoingFundCategory;

class OutgoingFundCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outgoing = new OutgoingFundCategory;
        $outgoing->category = "Bidang Penyelenggaraan Pemerintah Desa";
        $outgoing->save();

        $outgoing = new OutgoingFundCategory;
        $outgoing->category = "Bidang Pelaksanaan Pembangunan Desa";
        $outgoing->save();

        $outgoing = new OutgoingFundCategory;
        $outgoing->category = "Bidang Pembinaan Kemasyarakatan";
        $outgoing->save();

        $outgoing = new OutgoingFundCategory;
        $outgoing->category = "Bidang Pemberdayaan Masyarakat";
        $outgoing->save();

        $outgoing = new OutgoingFundCategory;
        $outgoing->category = "Bidang Penanggulangan Bencana, Darurat Dan Mendesak Desa";
        $outgoing->save();
    }
}
