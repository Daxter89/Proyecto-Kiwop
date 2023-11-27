<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data){
        return Validator::make($data, [
            'name'=>['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'=> ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    public function create(Request $request){

        $this->validator($request->all())->validate();

        User::create([
            'name'=> $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'rol'=>$request['rol'],
        ]);

        return redirect()->route('fichar-admin');
    }
    public function update(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'rol' => 'required|in:admin,employee',
        ]);

        // Logic to update the user
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->rol = $request->input('rol');

        return redirect()->route('update.employee')->with('success', 'User updated successfully.');

    }
}
