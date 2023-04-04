@extends('layouts.app')
@section('title')
Mes groupes
@endsection
@section('content')
<div class="profileCategory">
    @foreach ($myGroups as $group)
    <p><a href="{{route('groups.show', ['group' => $group->id])}}">{{$group->name}}</a></p>   
    @endforeach
    <button><a href="{{route('groups.create')}}">Créer un groupe</a></button>
</div>
@endsection