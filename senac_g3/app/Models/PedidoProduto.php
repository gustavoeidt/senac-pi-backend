<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PedidoProduto extends Pivot
{
    protected $fillable = ['quantidade'];
}
