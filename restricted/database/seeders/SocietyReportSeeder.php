<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SocietyReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $society_report = new SocietyReport;

        $society_report->person_id = 1;
        $society_report->tag_id = 1;
        $society_report->village_id = 1;
        $society_report->rt = "01";
        $society_report->rt = '03';
        $society_report->title = "Jalan Berlubang";
        $society_report->content = "Terdapat banyak sekali lubang di jalan x , ini sangat membahayakan untuk para pengendara . mohon segera diperbaiki";
        $society_report->image_url = "no_thub.png";
        $society_report->status = "menunggu";

        $society_report->save();
        $society_report = new SocietyReport;

        $society_report->person_id = 1;
        $society_report->tag_id = 1;
        $society_report->village_id = 1;
        $society_report->rt = "01";
        $society_report->rt = '03';
        $society_report->title = "Jalan Berlubang";
        $society_report->content = "Terdapat banyak sekali lubang di jalan x , ini sangat membahayakan untuk para pengendara . mohon segera diperbaiki";
        $society_report->image_url = "no_thub.png";
        $society_report->status = "menunggu";

        $society_report->save();
        $society_report = new SocietyReport;

        $society_report->person_id = 1;
        $society_report->tag_id = 1;
        $society_report->village_id = 1;
        $society_report->rt = "01";
        $society_report->rt = '03';
        $society_report->title = "Jalan Berlubang";
        $society_report->content = "Terdapat banyak sekali lubang di jalan x , ini sangat membahayakan untuk para pengendara . mohon segera diperbaiki";
        $society_report->image_url = "no_thub.png";
        $society_report->status = "menunggu";

        $society_report->save();
    }
}
