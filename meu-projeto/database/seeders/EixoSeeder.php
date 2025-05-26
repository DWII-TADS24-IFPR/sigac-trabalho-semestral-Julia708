<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Eixo;

class EixoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eixo::create([
            'nome' => 'Tecnologia da Informação',
        ]);

        Eixo::create([
            'nome' => 'Engenharia',
        ]);
    }
}
