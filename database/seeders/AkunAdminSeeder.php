<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rise Development',
            'email' => 'risedevelopmentteam@gmail.com',
            'status' => 'petugas',
            'password' => Hash::make('12345678')
        ]);
    }
}
