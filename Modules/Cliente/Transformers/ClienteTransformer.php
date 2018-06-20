<?php

namespace Modules\Cliente\Transformers;

use Illuminate\Http\Resources\Json\Resource;
use League\Fractal;

use Modules\Cliente\Entities\Cliente;

class ClienteTransformer extends Fractal\TransformerAbstract
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function transform(Cliente $client){
        return [
            'id'           => (int) $client->id,
            'nome'         => $client->nome,
            'sobrenome'    => $client->sobrenome,
            'idade'        => $client->idade,
            'ddd'          => $client->ddd,
            'telefone'     => $client->telefone,
            'email'        => $client->email,
            'dtNascimento' => $client->dtNascimento,
            'procedimento' => $client->procedimento,
            'dataRegistro' => $client->dataRegistro
        ];
    }
}
