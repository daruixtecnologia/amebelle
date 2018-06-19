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
//
//        $dt = Carbon::today('America/Sao_Paulo')->toDateString();
//        $d = Carbon::createFromFormat('Y-m-d', $dt);
//        $a = $d->format('d/m/Y');

        return [
            'id'           => (int) $client->id,
            'nome'         => $client->nome,
            'dataRegistro' => $client->dataRegistro,
            'sobrenome'    => $client->sobrenome,
            'idade'        => $client->idade,
            'telefone'     => $client->telefone,
            'ddd'          => $client->ddd,
            'dtNascimento' => $client->dtNascimento,
            'email'        => $client->email
        ];
    }
}
