@extends('layout')

@section('content')

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @Foreach($participante as $participante)
        <tr>
            <td>{{ $participante->id}}</td>
            <td>{{ $participante->Nombre}}</td>
            <td>{{ $participante->Apellido}}</td>
            <td>{{ $participante->Edad}}</td>
            <td>
                
            <a href="{{ route('participante.edit', $participante) }}">
            Editar | </a>
                
            <form action="{{ url('/participante/'.$participante->id)}}" method="post">
            @csrf

            @method('DELETE')

            <input type="submit" onclick="return confirm('¿Quieres borrar?')" 
            value="Borrar">


            </form>


            </td>
          
        </tr>
        @endforeach
    </tbody>
</table>

@endsection