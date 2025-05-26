<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
    [
        'nome' => 'Admin Principal',
        'email' => 'admin@ifpr.edu.br',
        'senha' => bcrypt('admin123'),
        'role_id' => 1,
        'curso_id' => 1,
    ],
]);

    }
}
