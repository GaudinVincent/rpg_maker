@extends('layouts.app')
@section('title')
    Mes groupes
@endsection
@section('content')
<div class="profileCategory">
    <p><b>Nom du groupe: </b>{{$groupID["name"]}}</p>
    <p><b>Description du groupe: </b>{{$groupID["description"]}}</p>
    <p><b>Nombre de places: </b>{{$groupID["capacity"]}}</p>
    <button><a href="{{route('groups.edit', ['group' => $groupID['id']])}}">Modifier le groupe</a></button>
    <form action="{{route('groups.destroy', ['group' => $groupID['id']])}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer le groupe</button>
    </form>
</div>

@endsection