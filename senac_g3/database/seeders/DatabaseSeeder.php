<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProdutoSeeder;
use Database\Seeders\ClienteSeeder;
use Database\Seeders\PedidoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProdutoSeeder::class,
            ClienteSeeder::class,
            PedidoSeeder::class,
        ]);
    }
}
