@extends('layoust.plantilla')

@section('title','cursos')
    

@section('content')
<h1>Dejanos un mensaje</h1>

<form action="{{ route('contacto.store')}}" method="POST">
    @csrf
  
<label>
    Nombre:
    <br>

    <input type="text" name="name">
</label>

@error('name')
    <p><strong>{{ $message }} </strong></p>
@enderror
<br>

<label>
    correo:

    <br>

    <input type="text" name="correo">
</label>

<br>


<label>
    @error('correo')
    <p><strong>{{ $message }} </strong></p>
@enderror
    mensaje:
    <br>

    <textarea  name="mensaje" rows="4"></textarea>
</label>
<br>
@error('mensaje')
    <p><strong>{{ $message }} </strong></p>
@enderror

<button type="submit">Enviar mensaje</button>
</form>

@if (session('info'))

<script>
    alert("{{ session('info') }}  "  );
    </script>
    
@endif
@endsection
