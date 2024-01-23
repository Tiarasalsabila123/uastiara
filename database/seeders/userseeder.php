<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Tiara Salsabila Putri",
            'email' => 'salaatiara@gmail.com',
            'password' => Hash::make('sayang12345'),
            // 'level' => 'admin',
			]);

    }
}
