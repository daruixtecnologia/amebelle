<?php

namespace Modules\Cliente\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    protected $fillable = ['dataRegistro', 'nome', 'sobrenome', 'idade', 'telefone', 'ddd', 'dtNascimento','email', 'updated_at', 'created_at'  ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $hidden = [
        'pivot',
    ];
}
