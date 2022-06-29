@extends('layoust.plantilla')

@section('title',$curso->name)


@section('content')
    
<h1>cursos de programacion  {{ $curso->name}} </h1>

<a href="{{route('cursos.edit',$curso->id)}}">Editar curso</a>
@endsection