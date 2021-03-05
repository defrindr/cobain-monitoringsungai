<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call([
            RolesSeeder::class,
            ProvinceSeeder::class,
            DistrictSeeder::class,
            SubDistrictSeeder::class,
            VillageSeeder::class,
            NotificationSeeder::class,
            CctvSeeder::class,
            BloodTypeSeeder::class,
            ReportTagSeeder::class,
            FamilyStatusSeeder::class,
            JobSeeder::class,
            OutgoingFundCategorySeeder::class,
            IncomingFundCategorySeeder::class,
            AgamaSeeder::class,
            FamilySeeder::class,
            PersonSeeder::class,
            UserSeeder::class,

            FundReportSeeder::class,
            IncomingFundCategorySeeder::class,
            OutgoingFundCategorySeeder::class,
            IncomingFundSeeder::class,
            OutgoingFundSeeder::class,
            DetailIncomingFundSeeder::class,
            DetailOutgoingFundSeeder::class,
        ]);
    }
}
