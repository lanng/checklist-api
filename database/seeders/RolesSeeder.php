<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('role_user')->insert([
            ['name' => 'Administrator', 'slug' => 'admin'],
            ['name' => 'Office Staff', 'slug' => 'office'],
            ['name' => 'Driver', 'slug' => 'driver'],
        ]);
    }
}
