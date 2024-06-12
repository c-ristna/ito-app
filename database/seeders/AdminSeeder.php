<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Import Hash facade

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into 'admins' table
        DB::table('admins')->insert([
            [
                'nama_admin' => 'Cristina',
                'email' => 'ctina056@gmail.com',
                'password' => Hash::make('1234'), // Hash the password
            ],
        ]);
    }
}
