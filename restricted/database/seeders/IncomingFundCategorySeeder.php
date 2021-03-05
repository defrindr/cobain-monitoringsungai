<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IncomingFundCategory;

class IncomingFundCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $income = new IncomingFundCategory;
        $income->category = "Pendapatan Asli Desa";
        $income->save();

        $income = new IncomingFundCategory;
        $income->category = "Pendapatan Transfer";
        $income->save();

        $income = new IncomingFundCategory;
        $income->category = "Pendapatan Lainnya";
        $income->save();
    }
}
