@extends('layouts.app')
@section('title')
Modifier le groupe
@endsection
@section('content')
    <form action="{{route('groups.update' , ['group' => $groupID['id']])}}" method="post" class="creationForm">
        @csrf
        @method('PUT')
        <label for="name">Nom du groupe:</label>
        <input type="text" name="name" id="name" placeholder="Nom du groupe" value="{{$groupID['name']}}">
        <label for="description">Description du groupe:</label>
        <textarea name="description" id="description" cols="50" rows="5">
        {{$groupID['description']}}
        </textarea>
        <label for="capacity">Nombre de places:</label>
        <select name="capacity" id="capacity">
            <option value="4">4 personnages</option>
            <option value="6">6 personnages</option>
            <option value="8">8 personnages</option>
        </select>
        <button type="submit">Valider</button>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
@endsection