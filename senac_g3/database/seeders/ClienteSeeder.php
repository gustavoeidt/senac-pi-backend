<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Produto;
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
            $pedidos = Pedido::factory()->count(rand(1, 10))->create(['cliente_id' => $cliente->id]);
            foreach ($pedidos as $pedido) {
                $produtos = Produto::factory()->count(rand(1, 10))->create();
                foreach ($produtos as $produto) {
                    $pedido->produtos()->attach($produto->id, ['quantidade' => rand(1, 1000)]);
                }
            }
        });
    }
}
