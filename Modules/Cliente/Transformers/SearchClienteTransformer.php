<?php

namespace Modules\Cliente\Transformers;

use Illuminate\Http\Resources\Json\Resource;
use League\Fractal;

class SearchClienteTransformer extends Fractal\TransformerAbstract
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function transform($request)
    {
        return [
            'id'           => (int) $request->id,
            'nome'         => $request->nome,
            'sobrenome'    => $request->sobrenome,
            'idade'        => $request->idade,
            'ddd'          => $request->ddd,
            'telefone'     => $request->telefone,
            'email'        => $request->email,
            'dtNascimento' => $request->dtNascimento,
            'procedimento' => $request->procedimento,
            'dataRegistro' => $request->dataRegistro
        ];
    }
}
