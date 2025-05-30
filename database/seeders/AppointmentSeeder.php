<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointment')->insert([
            [
                'customer_id' => 1,
                'appointment_date' => Carbon::now()->addWeek(),
            ],
            [
                'customer_id' => 1,
                'appointment_date' => Carbon::now()->addDays(18),
            ],
            [
                'customer_id' => 2,
                'appointment_date' => Carbon::now()->subDay(),
            ],
            [
                'customer_id' => 3,
                'appointment_date' => Carbon::now()->addDays(10),
            ],
        ]);
    }
}
