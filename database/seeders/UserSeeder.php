<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'take',
            'email' => 'take0007',
            'email_verified_at' => new DateTime(),
            'password' => 'lavatech',
            'image_path' => '11',
            'last_login_at' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
