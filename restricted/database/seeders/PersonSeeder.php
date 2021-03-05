<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Person;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function randomNumber($length) {
            $result = '';
        
            for($i = 0; $i < $length; $i++) {
                $result .= mt_rand(0, 9);
            }
        
            return $result;
        }
        $LK = 'PL';
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10000; $i++){

            $user = new User;
            $user->role_id = 2; // role netizen
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->status = rand(0,2);
            $user->password = Hash::make("password");
            $user->save();

            $person = new Person;
            $person->user_id = $user->id;
            $person->last_education_id = rand(4,19);
            $person->village_id = 1;
            $person->sub_district_id = 1;
            $person->district_id = 1;
            $person->province_id = 1;
            $person->job_id = rand(1,4);
            $person->blood_type_id = rand(1,4);
            $person->family_status_id = rand(1,7);
            $person->agama_id = rand(1,7);
            $person->nik = randomNumber(16);
            $person->kk_number = randomNumber(16);
            $person->full_name = $user->name;
            $person->date_of_birth = $faker->date($format = 'y-m-d', $max = '2010',$min = '1990');
            $person->place_of_birth = $faker->city;
            $person->address = $faker->address;
            $person->sex = $LK[mt_rand(0, strlen($LK) - 1)];
            $person->married_status = rand(1,4);
            $person->latitude = $faker->latitude;
            $person->longitude = $faker->longitude;
            $person->rt = rand(1,10);
            $person->rw = rand(1,10);
            $person->foto = '-';
            $person->makan_dalam_sehari = rand(1,4);
            $person->pakaian_dalam_seminggu = rand(1,2);
            $person->sakit_keras = rand(1,4);
            $person->jenis_dinding = rand(1,7);
            $person->jenis_lantai = rand(1,7);
            $person->air_minum = rand(1,8);
            $person->listrik = rand(1,5);
            $person->jamban = rand(1,3);
            $person->jenis_jamban = rand(1,4);
            $person->saluran_mck = rand(1,4);
            $person->kepemilikan_rumah = rand(1,5);
            $person->bahan_bakar_memasak = rand(1,9);
            $person->isi_kuesioner = rand(0,1);

            $person->save();
        }
    }
}
