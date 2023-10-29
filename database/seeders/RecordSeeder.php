<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Date;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            'month_page' => '200',
            'month' => '2023-09-01',
            'goal' => '500',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
