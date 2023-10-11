<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Default_CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('default_categories')->insert([
            'name' => '未読',
        ]);
        
        DB::table('default_categories')->insert([
            'name' => '読み途中',
        ]);
        
        DB::table('default_categories')->insert([
            'name' => '既読',
        ]);
        
    }
}
