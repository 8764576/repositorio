@extends('layout')

@section('content')

<form action="{{ route('participante.update', $participante) }}" method="POST">
@csrf
@method('PUT')

<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ $participante->Nombre }}">
<br>
<label for="Apellido"> Apellido </label>
<input type="text" name="Apellido" value="{{ $participante->Apellido }}">
<br>
<label for="Edad"> Edad </label>
<input type="text" name="Edad" value="{{ $participante->Edad }}">
<br>

<label for="torneo"> Torneo</label>

<select name="torneo_id" >
@foreach ($torneos as $torneo)

<option value="{{ $torneo->id }}"> {{ $torneo-> NombreTorneo }} </option>

@endforeach

</select>

<br>
<input type="submit" value="Guardar">

</form>

@endsection