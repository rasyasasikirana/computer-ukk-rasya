<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create(['name'=>'admin', 'alamat'=>'Indonesia', 'email'=>'admin@gmail.com', 'email_verified_at'=> now (), 'no_telp'=>'01122', 'password'=>'password']);
        $user->assignRole('admin');
    }
}
