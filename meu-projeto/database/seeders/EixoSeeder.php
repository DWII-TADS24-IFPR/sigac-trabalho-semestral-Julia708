<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EixoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('eixos')->insert([
            ['nome' => 'Tecnologia da Informação'],
            ['nome' => 'Engenharia'],
        ]);

    }
}
