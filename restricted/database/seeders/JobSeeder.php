<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = ["Pedagang", "Pegawai Negeri Sipil (PNS)", "Guru", "Polisi"];
        
        foreach($jobs as $row){
            $job = new Job;
            $job->job_name = $row;
            $job->save();
        }
    }
}
