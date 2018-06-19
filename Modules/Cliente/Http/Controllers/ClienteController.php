<?php

namespace Modules\Cliente\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Carbon\Carbon;
use Modules\Cliente\Entities\Cliente as Cliente;
use Modules\Cliente\Transformers\ClienteTransformer;
use Spatie\Fractalistic\Fractal;
use Spatie\Fractalistic\ArraySerializer as Serializer;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        $clienteFormatted = Fractal::create()
            ->collection($clientes)
            ->transformWith(ClienteTransformer::class)
            ->serializeWith(new Serializer())
            ->toArray();

        return response()->json([
            'status' => 200,
            'slug' => 'response-ok',
            'message' => 'Response ok.',
            'data' => $clienteFormatted
        ], 200);


        return response()->json([
            'status' => 200,
            'slug' => 'response-ok',
            'message' => 'Response ok.'
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(Request $request)
    {
        $cliente = $request->all();
        $dt = Carbon::today('America/Sao_Paulo')->toDateString();
        $d = Carbon::createFromFormat('Y-m-d',$dt);
        $a = $d->format('d/m/Y');
        $cliente['dataRegistro'] = $a;

        Cliente::create($cliente);

        return response()->json([
            'status' => 200,
            'slug' => 'response-ok',
            'message' => 'Response ok.'
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('cliente::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('cliente::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
