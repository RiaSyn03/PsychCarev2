<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::truncate();

        Role::create(['role_name' => 'admin']);
        Role::create(['role_name' => 'counselor']);
        Role::create(['role_name' => 'student']);
    }
}
