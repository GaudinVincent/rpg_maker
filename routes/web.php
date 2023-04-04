<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GroupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//routes pour la création, l'affichage et la modification des utilisateurs
Route::resource('/users', UserController::class);
//routes pour la création, l'affichage et la modification des personnages pour chaque utilisateur
Route::resource('/characters', CharacterController::class);
//routes pour la création, l'affichage et la modification des groupes pour chaque utilisateur
Route::resource('/groups', GroupController::class);
//route pour afficher la page d'accueil
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
//route pour afficher le profil de l'utlisateur connecté
Route::get('/profile', [HomeController::class, 'getProfile'])->name('home.profile');
//route pour afficher le formulaire de connexion
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
//route pour afficher un message de confirmation de connexion
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
//route pour se déconnecter
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');