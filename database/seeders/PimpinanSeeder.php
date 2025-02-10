<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PimpinanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create(['name'=>'pimpinan', 'alamat'=>'Indonesia', 'email'=>'pimpinan@gmail.com', 'email_verified_at'=> now (), 'no_telp'=>'01144', 'password'=>'password']);
        $user->assignRole('pimpinan');
    }
}
