<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permissao;

class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permissao::create([
            'role_id' => 1, 
            'resource_id' => 1, 
            'permissao' => true
        ]);

        Permissao::create([
            'role_id' => 2, 
            'resource_id' => 1, 
            'permissao' => false
        ]);

    }
}
