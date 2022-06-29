@extends('layoust.plantilla')

@section('title','edit')
    

@section('content')
<h1>Actualizar </h1>

<form action="{{ route('curso.update' ,$curso->id)}}" method="post">
    @csrf 

    @method('put')

<label>
    Nombre:
    <input type="text" name="name" value="{{old('name',$curso->name)}}" required>
</label>

@error('name')
<br>
<small>*{{ $message}}</small>
<br>
@enderror
<br>
<label>
Descripccion:

<input name="desc" rows="5" value="{{ old('desc',$curso->descrition)}}" >
</label>
@error('desc')
<br>
<small>*{{ $message}}</small>
<br>
@enderror
<label>
    Categoria
    <br>
    <input  type="text"  name="categoria" value="{{old('categoria',$curso->categoria)}}">

    @error('categoria')
<br>
<small>*{{ $message}}</small>
<br>
@enderror
    <input type="submit" value="editar">
</form>
@endsection
