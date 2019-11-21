<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $fillable = ['banco_id', 'tipo_id', 'conta'];

    public function banco()
    {
        return $this->belongsTo(Banco::class);
    }

    public function tipo()
    {
        return $this->belongsTo(TipoConta::class);
    }

    public function lancamentos()
    {
        return $this->hasMany(Lancamento::class);
    }
}
