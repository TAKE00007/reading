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
        DB::table('books')->insert(
            [
            'title' => 'いのちの車窓から',
            'pages' => '200',
            /*'image_url' => 'title',*/
            'reading_pages' => '50',
            'month_progress' => '50',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'author_id' => '1',
            'default_category_id' => '1',
            ]);
        DB::table('books')->insert(    
            [
            'title' => 'arashi',
            'pages' => '200',
            /*'image_url' => 'title',*/
            'reading_pages' => '50',
            'month_progress' => '50',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'author_id' => '2',
            'default_category_id' => '1',    
            ]);
        DB::table('books')->insert(    
            [
            'title' => '虹',
            'pages' => '200',
            /*'image_url' => 'title',*/
            'reading_pages' => '50',
            'month_progress' => '50',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'author_id' => '2',
            'default_category_id' => '2',    
            ]);
        DB::table('books')->insert(    
            [
            'title' => '暁',
            'pages' => '200',
            /*'image_url' => 'title',*/
            'reading_pages' => '50',
            'month_progress' => '50',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'author_id' => '2',
            'default_category_id' => '2',    
            ]);
        DB::table('books')->insert(    
            [
            'title' => 'OnePiece',
            'pages' => '200',
            /*'image_url' => 'title',*/
            'reading_pages' => '50',
            'month_progress' => '50',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'author_id' => '2',
            'default_category_id' => '3',    
            ]);
        DB::table('books')->insert(    
            [
            'title' => 'フィルム',
            'pages' => '200',
            /*'image_url' => 'title',*/
            'reading_pages' => '50',
            'month_progress' => '50',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'author_id' => '1',
            'default_category_id' => '3',    
            ]);
    }
}
