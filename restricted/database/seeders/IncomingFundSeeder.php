<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IncomingFund;

class IncomingFundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $income_fund = new IncomingFund;
        $income_fund->incoming_fund_category_id = 1;
        $income_fund->fund_report_id = 1;
        $income_fund->total_income = "4500000";
        $income_fund->information = "-";

        $income_fund->save();
    }
}
