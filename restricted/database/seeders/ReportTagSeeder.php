<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReportTag;

class ReportTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $report_tag = new ReportTag;
        $report_tag->tag = "INfrastruktur";
        $report_tag->tag_icon = "./assets/report_tag_icon/infrastruktur.png";
        $report_tag->save();


        $report_tag = new ReportTag;
        $report_tag->tag = "Fasilitas Publik";
        $report_tag->tag_icon = "./assets/report_tag_icon/fasilita_publik.png";
        $report_tag->save();


        $report_tag = new ReportTag;
        $report_tag->tag = "Pelanggaran Hukum";
        $report_tag->tag_icon = "./assets/report_tag_icon/pelanggaran_hukum.png";
        $report_tag->save();
    }
}
