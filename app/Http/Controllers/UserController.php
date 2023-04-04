<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //on affiche tous les utilisateurs existants
    public function index()
    {
        $users = User::all();
        return view('users.index')->with(['allUsers' => $users]);
    }

    //on affiche le formulaire d'inscription
    public function create()
    {
        return view('users.create');
    }

    //on vérifie que chaque champ du formulaire respecte bien le format
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => array(
                'required',
                'regex:^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$^'
            )
        ]);
        //puis on crée un nouvel utilisateur dans la base de données via le modèle
        $user = User::create($request->post());
        return view('users.store')->with(["userCreated" => $user]);
    }

    //on affiche un utilisateur grâce à son id
    public function show(string $id)
    {
        $userID = User::findOrFail($id);
        return view('users.show')->with(['userID' => $userID]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}