<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lancamento extends Model
{
    protected $fillable = ['descricao', 'tipo', 'vencimento', 'valor', 'status', ];

    public function conta()
    {
        return $this->belongsTo(Conta::class);
    }
}
