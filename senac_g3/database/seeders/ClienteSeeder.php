<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::factory()->count(5)->create()->each(function (Cliente $cliente) {
            Pedido::factory()->count(rand(0, 10))->create(['cliente_id' => $cliente->id]);
        });
    }
}
