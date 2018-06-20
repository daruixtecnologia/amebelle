<?php

namespace Modules\Cliente\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'sobrenome',
        'idade',
        'ddd',
        'telefone',
        'email',
        'dtNascimento',
        'procedimento',
        'dataRegistro',
        'updated_at',
        'created_at'
    ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $hidden = [
        'pivot',
    ];
}
