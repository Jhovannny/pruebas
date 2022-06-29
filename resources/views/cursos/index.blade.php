@extends('layoust.plantilla')

    @section('title','index')
        
    
    @section('content')

    <a href="{{ route('curso.create')}}">crea un curso</a>

    <h1>pagina princial  </h1>

@foreach ($curso as $item)

{{$item->name}}
{{$item->descrition}}
{{$item->categoria}}

{{$curso->links()}}
<a href="{{ route('curso.show',$item->id)}}">cursonew</a>


    
@endforeach

    @endsection