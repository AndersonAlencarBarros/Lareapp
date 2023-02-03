<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function list()
    {
        $users = User::all();
        return view('users.list')->with('users', $users);
    }

    public function show(User $user)
    {
        return view('users.update')->with('user', $user);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
        ]);

        User::create($request->post());

        return redirect()->route('users.create')->with('success', 'Usuário Cadastrado com Sucesso.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }

    public function update(Request $request, User $user)
    { 

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'phone' => 'required',
        // ]);   
        
        // $user = User::find($id);

        // $user->name =  $request->get('name');
        // $user->email = $request->get('email');
        // $user->phone = $request->get('phone');
        // $user->save();

        $user->fill($request->post())->save();



        return redirect()->route('users.list');
    }
}
