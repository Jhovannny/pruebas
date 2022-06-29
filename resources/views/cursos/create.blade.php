@extends('layoust.plantilla')

@section('title','create')
    

@section('content')
<h1>creada con exito </h1>

<form action="{{ route('curso.store')}}" method="post">
    @csrf 

<label>
    Nombre:
    <input type="text" name="name" value="{{old('name')}}">
</label>

@error('name')
<br>
<small>*{{ $message}}</small>
<br>
    
@enderror
<br>
<label>
Descripccion:

<textarea name="descrition" rows="5"  value="{{old('descrition')}}"></textarea>

@error('descrition')
<br>
<small>{{ $message}}</small>
<br>

@enderror
</label>

<label>
    Categoria
    <br>
    <input  type="text"  name="categoria" value="{{old('categoria')}}">


    @error('categoria')
    <br>
    <small>{{ $message}}</small>
    <br>

    @enderror
    <input type="submit" value="Enviar">
</form>
@endsection
