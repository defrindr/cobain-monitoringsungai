<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notification = new Notification;
        $notification->title = "Pengambilan Upeti 2020";
        $notification->content = "Pengambilan Upeti 2020 dapat dilakukan besok senin , tanggal 27 september 2020";
        $notification->save();


        $notification = new Notification;
        $notification->title = "Pengambilan Upeti 2020";
        $notification->content = "Pengambilan Upeti 2020 dapat dilakukan besok senin , tanggal 27 september 2020";
        $notification->user_id = 1;
        $notification->save();
    }
}
