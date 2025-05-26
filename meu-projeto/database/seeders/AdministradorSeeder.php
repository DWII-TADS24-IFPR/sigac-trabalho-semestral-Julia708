<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Administrador;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Administrador::create([
            'nome' => 'Sandra Fernandes',
            'email' => 'sandra@exemplo.com',
            'senha' => bcrypt('senha123'),
            'role_id' => 1,
        ]);
    }
}
