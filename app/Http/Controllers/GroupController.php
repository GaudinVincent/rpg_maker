<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use Auth;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::where('user_id', Auth::id())->get();
        return view('groups.index')->with(['myGroups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'capacity' => 'in:"4","6","8"',
        ]);
        $myGroup = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'capacity' => $request->input('capacity'),
            'user_id' => Auth::id(),

        ];
        Group::create($myGroup);
        return view('groups.store')->with(['myGroup' => $myGroup]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $groupID = Group::findOrFail($id);
        return view('groups.show')->with(['groupID' => $groupID]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $groupID = Group::findOrFail($id);
        return view('groups.edit')->with(['groupID' => $groupID]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'capacity' => 'in:"4","6","8"',
        ]);
        $modifGroup = Group::findOrFail($id);
        $modifGroup->name = $request->input('name');
        $modifGroup->description = $request->input('description');
        $modifGroup->capacity = $request->input('capacity');
        $modifGroup->save();
        return view('groups.update')->with(['modifGroup' => $modifGroup]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $group = Group::findOrFail($id);
        $group->delete();
        return view('groups.destroy')->with(['group' => $group]);
    }
}