<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetailIncomingFund;

class DetailIncomingFundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_incoming_fund = new DetailIncomingFund;
        $detail_incoming_fund->incoming_fund_id = 1;
        $detail_incoming_fund->title = "Hasil Kios Milik Desa";
        $detail_incoming_fund->amount = "4500000";
        $detail_incoming_fund->save();
    }
}
