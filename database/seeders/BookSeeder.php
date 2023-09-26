<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'いのちの車窓から',
            'pages' => '200',
            'image_url' => 'title',
            'reading_pages' => '100',
            'month_progress' => '50',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}