<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {

        products::create(
            [
                'nome' => 'Produto 1',
                'valor' => '24.99'
            ]
        );
        products::create(
            [
                'nome' => 'Produto 2',
                'valor' => '35.44'
            ]
        );
        products::create(
            [
                'nome' => 'Produto 1',
                'valor' => 'Produto 2'
            ]
        );
        products::create(
            [
                'nome' => 'Produto 1',
                'valor' => 'Produto 2'
            ]
        );
    }
}
