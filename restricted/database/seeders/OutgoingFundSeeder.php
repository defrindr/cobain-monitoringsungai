<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OutgoingFund;

class OutgoingFundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outgoing_fund = new OutgoingFund;
        $outgoing_fund->outgoing_fund_category_id = 1;
        $outgoing_fund->fund_report_id = 1;
        $outgoing_fund->total_out = "4500000";
        $outgoing_fund->information = "-";

        $outgoing_fund->save();
    }
}
