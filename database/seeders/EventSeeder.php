<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'id' =>1,
            'name' =>'Cầu trượt',
            'location' =>'Đầm sen Park',
            'start_day' =>'2022-06-21 00:0:00',
            'end_day' =>'2022-07-20 00:0:00',
            'price' => 25000,
        ]);
        Event::create([
            'id' =>2,
            'name' =>'Hồ bơi',
            'location' =>'Đầm sen Park',
            'start_day' =>'2022-06-29 00:0:00',
            'end_day' =>'2022-07-20 00:0:00',
            'price' => 25000,
        ]);
        Event::create([
            'id' =>3,
            'name' =>'Thác nước',
            'location' =>'Đầm sen Park',
            'start_day' =>'2022-06-22 00:0:00',
            'end_day' =>'2022-07-20 00:0:00',
            'price' => 25000,
        ]);
        Event::create([
            'id' =>4,
            'name' =>'Tổng hợp',
            'location' =>'Đầm sen Park',
            'start_day' =>'2022-06-26 00:0:00',
            'end_day' =>'2022-07-20 00:0:00',
            'price' => 25000,
        ]);

        Event::create([
            'id' =>5,
            'name' =>'Hang động',
            'location' =>'Đầm sen Park',
            'start_day' =>'2022-06-26 00:0:00',
            'end_day' =>'2022-07-20 00:0:00',
            'price' => 25000,
        ]);
    }
}
