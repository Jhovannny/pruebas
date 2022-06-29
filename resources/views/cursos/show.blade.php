@extends('layoust.plantilla')

@section('title')


@section('content')
    
<h1>cursos de programacion  {{ $curso->name}} </h1>

<a href="{{route('cursos.edit',$curso->id)}}">Editar curso</a>


<form action="{{ route('curso.destroy', $curso->id)}}" method="post">
   @csrf
    @method('delete')

<input type="submit" value=">Eliminar curso" >

</form>
@endsection