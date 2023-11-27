<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GestionEmpleadosController extends Controller
{
    public function gestion()
    {
        $usuarios = User::all();
        return view('admin.empleados', compact('usuarios'));
    }

    public function desactivar(User $usuario)
    {
        $usuario->habilitado = false;
        $usuario->save();
        return redirect()->route('admin.usuarios');
    }

    public function reactivar(User $usuario)
    {
        $usuario->habilitado = true;
        $usuario->save();
        return redirect()->route('admin.usuarios');
    }

    // Funció que retorna la vista de edició d'usuari
    public function editar(User $usuario)
    {
        return view('admin.editar_empleado', compact('usuario'));
    }

    // Funció que controla la actualització de usuaris
    public function actualizar(Request $request, User $usuario)
    {
    // Validación de campos
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'password' => 'nullable|string|min:8|confirmed',
        'rol' => 'required|in:admin,employee',
    ]);

    // Actualiza los campos del usuario con los nuevos valores
    $usuario->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => $request->input('password') ? bcrypt($request->input('password')) : $usuario->password,
        'rol' => $request->input('rol'),
    ]);

    return redirect()->route('admin.usuarios')->with('success', 'Usuario actualizado correctamente.');
    }


}
