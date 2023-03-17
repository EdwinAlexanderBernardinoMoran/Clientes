<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Resources\V1\ClienteResource;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devuelve todos los datos paginados de la DB
        return ClienteResource::collection(Cliente::latest()->paginate());
        // return Cliente::latest()->paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required|email',
            'fecha_nacimiento' => 'required|date',
            'departamento' => 'required',
            'municipio' => 'required',
            'direccion' => 'required',
            'dui' => 'required|min:10',
            'telefono' => 'required|min:8',
            'sexo' => 'required',
        ]);

        $cliente = new Cliente();
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->email = $request->email;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->departamento = $request->departamento;
        $cliente->municipio = $request->municipio;
        $cliente->direccion = $request->direccion;
        $cliente->dui = $request->dui;
        $cliente->telefono = $request->telefono;
        $cliente->sexo = $request->sexo;
        $cliente->created_at = Carbon::now();
        $cliente->updated_at = Carbon::now();
        $cliente->save();

        return response()->json(['response' => 'Usuario Creado Exitosamente !!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return new ClienteResource($cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Cliente $cliente)
    {

        $cliente->update($request->all());
        return response()->json($cliente, 200);

        // return new ClienteResource($cliente);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        if ($cliente->delete($cliente)) {

            return response()->json(['response' => 'Usuario Eliminado Exitosamente !!'], 201);
        }

    }
}
