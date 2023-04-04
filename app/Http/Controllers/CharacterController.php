<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    //on affiche tous les personnages de l'utilisateur
    public function index()
    {
        $characters = Character::where('user_id', Auth::id())->get();
        return view('characters.index')->with(['myCharacters' => $characters]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'characterName' => 'required|string',
            'description' => 'required|string',
            'classe' => 'required|in:"guerrier","mage","druide","assassin","berserker","archer"',
            'for' => 'required|integer',
            'mag' => 'required|integer',
            'agi' => 'required|integer',
            'int' => 'required|integer',
            'pvs' => 'required|integer',
        ]);
        $myCharacter = [
            'characterName' => $request->input('characterName'),
            'description' => $request->input('description'),
            'classe' => $request->input('classe'),
            'for' => $request->input('for'),
            'mag' => $request->input('mag'),
            'agi' => $request->input('agi'),
            'int' => $request->input('int'),
            'pvs' => $request->input('pvs'),
            'user_id' => Auth::id(),
        ];
        Character::create($myCharacter);
        return view('characters.store')->with(['myCharacter' => $myCharacter]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $characterID = Character::findOrFail($id);
        dd($characterID);
        return view('characters.show')->with(['characterID' => $characterID]);

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