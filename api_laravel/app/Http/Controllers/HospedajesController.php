<?php

namespace App\Http\Controllers;

use App\Models\hospedajes;
use Illuminate\Http\Request;

class HospedajesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Aquí podrías obtener y devolver una lista de usuarios
        // $users = [
        //     ['name' => 'Lugar 1'],
        //     ['name' => 'Lugar 2'],
        //     ['name' => 'Lugar 3'],
        // ];
        $users = hospedajes::get();

        return response()->json($users, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(hospedajes $hospedajes)
    {
        // $user = [
        //     'id' => $hospedajes,
        //     'name' => 'Nombre del usuario ' . $hospedajes,
        //     'lugar' => 'lugar ' . $hospedajes . ' sitios',
        // ];
        $user = [];
        try {
            $user = hospedajes::find($hospedajes);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e ) {
            $user = $e;
        }
        if ($user) {
            // El usuario fue encontrado, haz algo con el modelo...
            return response()->json($user, 200);
        } else {
            // El usuario no fue encontrado
            echo 'no hay datos';
            return response()->json(['message'=> 'paila nea'], 400);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hospedajes $hospedajes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hospedajes $hospedajes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hospedajes $hospedajes)
    {
        //
    }
}
