<?php

use Illuminate\Database\Seeder;

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
        [
          'name' => "Teknosop Admin",
          'email' => "admin@gmail.com",
          'password' => Hash::make("888888"),
          'akses' => "Admin Gudang"
        ],
        [
          'name' => "Teknosop SuperAdmin",
          'email' => "superadmin@gmail.com",
          'password' => Hash::make("888888"),
          'akses' => "Admin Utama"
        ],
        [
          'name' => "Teknosop Kasir",
          'email' => "kasir@gmail.com",
          'password' => Hash::make("888888"),
          'akses' => "Kasir"
        ]
      ]);
    }
}
