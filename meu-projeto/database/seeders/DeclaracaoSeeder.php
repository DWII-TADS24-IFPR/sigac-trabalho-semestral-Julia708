<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Declaracao;

class DeclaracaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Declaracao::create([
            'hash' => 'dpo2k3t24t2',
            'data' => now(),
            'user_id' => 1,
            'comprovante_id' => 1,

        ]);

    }
}
