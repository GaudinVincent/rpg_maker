<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    //page d'accueil
    public function index()
    {
        return view('home.index');
    }
    //profil de l'utilisateur connecté
    public function getProfile()
    {
        $userProfile = Auth::user();
        return view('home.profile')->with(['userProfile' => $userProfile]);
    }



}