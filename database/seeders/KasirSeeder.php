<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create(['name'=>'kasir', 'alamat'=>'Indonesia', 'email'=>'kasir@gmail.com', 'email_verified_at'=> now (), 'no_telp'=>'01133', 'password'=>'password']);
        $user->assignRole('kasir');
    }
}
