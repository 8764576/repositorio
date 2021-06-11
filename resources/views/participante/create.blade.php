@extends('layout')

@section('content')

<form action="{{ route('participante.store') }}" method="post">
@csrf 

<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" >
<br>
<label for="Apellido"> Apellido </label>
<input type="text" name="Apellido" >
<br>
<label for="Edad"> Edad </label>
<input type="text" name="Edad" >
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