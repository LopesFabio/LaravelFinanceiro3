<?php

namespace App\Models;
use App\Models\Contas;

use Illuminate\Database\Eloquent\Model;
/*
 * colocar o -m após criar a model cria o arquivo de migration
 */
class Banco extends Model
{
    protected $fillable = ['banco', 'agencia'];

    public function contas()
    {
        return $this->hasMany(Conta::class);
    }
}
