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
            'nome' => 'Mariana Costa',
            'cpf' => '987.654.321-00',
            'email' => 'mariana@exemplo.com',
            'senha' => bcrypt('senha456'),
        ]);
    }
}
