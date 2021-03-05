<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetailOutgoingFund;

class DetailOutgoingFundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_outgoing_fund = new DetailOutgoingFund;
        $detail_outgoing_fund->outgoing_fund_id = 1;
        $detail_outgoing_fund->title = "Penyediaan Penghasilan Tetap dan Tunjangan Kepala Desa";
        $detail_outgoing_fund->amount = "4500000";
        $detail_outgoing_fund->save();
    }
}
