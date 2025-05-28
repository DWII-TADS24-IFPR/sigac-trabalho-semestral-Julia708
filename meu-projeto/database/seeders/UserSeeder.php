<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use UserFactory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'nome' => 'Sandra Fernandes',
            'email' => 'sandra@exemplo.com',
            'password' => bcrypt('senha123'),
            'role_id' => 1,
        ]);

        User::create([
            'nome' => 'Mariana Costa',
            'email' => 'mariana@exemplo.com',
            'password' => bcrypt('senha456'),
            'role_id' => 2,
        ]);

        User::create([
            'nome' => 'Maria Santos',
            'email' => 'maria@exemplo.com',
            'password' => bcrypt('senha444'),
            'role_id' => 2,
        ]);
    }
}
