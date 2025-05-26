<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            ['role_id' => 1, 'resource_id' => 1, 'permission' => true],
            ['role_id' => 2, 'resource_id' => 1, 'permission' => false],
        ]);

    }
}
