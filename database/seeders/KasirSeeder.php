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
        $user=User::create(['name'=>'kasir','email'=>'kasir@gmail.com', 'email_verified_at'=> now (), 'password'=>'password']);
        $user->assignRole('kasir');
    }
}
