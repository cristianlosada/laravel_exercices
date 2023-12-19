<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Aquí podrías obtener y devolver una lista de usuarios
        $users = [
            ['name' => 'Usuario 1'],
            ['name' => 'Usuario 2'],
            ['name' => 'Usuario 3'],
        ];

        return response()->json($users, 200);
    }
    public function show($id)
    {
        // Aquí podrías obtener y devolver los detalles de un usuario específico basado en su ID
        $user = [
            'id' => $id,
            'name' => 'Nombre del usuario ' . $id,
            'email' => 'usuario' . $id . '@ejemplo.com',
        ];

        return response()->json($user, 200);
    }
}
