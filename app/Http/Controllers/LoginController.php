<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    //formulaire de connexion
    public function index()
    {
        return view('login.index');
    }
    //on vérifie que l'utilisateur existe 
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //et on le renvoie sur une page de confirmation de connexion
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return view('login.authenticate')->with(["userSession" => $credentials]);
        }
        //sinon on retourne sur la page précédente avec un message d'erreur
        return back()->withErrors(['email' => 'Identifiants incorrects.']);

    }
    //on afffiche le profil d'un utilisateur existant grâce à son ID
    public function showProfile(string $id)
    {
        $userID = User::findOrFail($id);
        return view('users.show')->with(['userID' => $userID]);
    }
    //on déconnecte l'utilisateur et on "détruit" sa session
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('login.logout');
    }
}