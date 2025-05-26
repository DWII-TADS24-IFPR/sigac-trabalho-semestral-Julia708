<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nivel;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nivel::table('niveis')->insert([
            ['nome' => 'Graduação'],
            ['nome' => 'Pós-graduação'],
        ]);

    }
}
