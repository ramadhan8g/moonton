<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=User::Create([
            'name'=>'Admin',
            'email'=>'Ramadhanyandra13@gmail.com',
            'password'=>bcrypt('password'),
        ]);
        $admin->assignRole('admin');
    }
}
