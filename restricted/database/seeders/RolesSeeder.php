<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                "role_name" => "Administrator"
            ],
            [
                "role_name" => "Citizen"
            ],
        ];

        foreach($roles as $role){
            Roles::create($role);
        }
    }
}
