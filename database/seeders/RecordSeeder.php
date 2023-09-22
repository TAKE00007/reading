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
            'month' => new DateTime(),
            'goal' => '500',
            'progress' => '300',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
