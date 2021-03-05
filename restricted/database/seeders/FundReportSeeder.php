<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FundReport;

class FundReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fund_report = new FundReport;

        $fund_report->month = 10;
        $fund_report->year = "2020";
        $fund_report->save();
    }
}
