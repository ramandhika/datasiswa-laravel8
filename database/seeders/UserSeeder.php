<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'PakGuru',
            'role' => 'admin',
            'email' => 'admin@sma404.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Ramandhika Ilham Pratama',
            'role' => 'admin',
            'email' => 'rama@gmail.com',
            'password' => bcrypt('rama')
        ]);
        DB::table('users')->insert([
            'name' => 'Ramandhika IP',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'rama@sma404.com',
            'password' => bcrypt('rama')
        ]);
        DB::table('users')->insert([
            'name' => 'Andi Saputra',
            'role' => 'siswa',
            'siswa_id' => 2,
            'email' => 'andi@sma404.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Budi Cahya',
            'role' => 'siswa',
            'siswa_id' => 3,
            'email' => 'budi@sma404.com',
            'password' => bcrypt('password123')
        ]);
    }
}
