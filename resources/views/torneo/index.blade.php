@extends('layout')

@section('content')

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>NombreTorneo</th>
            <th>Deporte</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @Foreach($torneo as $torneo)
        <tr>
            <td>{{ $torneo->id}}</td>
            <td>{{ $torneo->NombreTorneo}}</td>
            <td>{{ $torneo->Deporte}}</td>
            <td>{{ $torneo->Fecha}}</td>
            <td>{{ $torneo->Hora}}</td>
            <td>
                
            <a href="{{ route('torneo.edit', $torneo) }}">
            Editar | </a>
                
            <form action="{{ url('/torneo/'.$torneo->id)}}" method="post">
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