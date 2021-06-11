@extends('layout')

@section('content')

<form action="{{ route('torneo.store') }}" method="post">
@csrf

<label for="NombreTorneo"> NombreTorneo </label>
<input type="text" name="NombreTorneo" >
<br>
<label for="Deporte"> Deporte </label>
<input type="text" name="Deporte"  >
<br>
<label for="Fecha"> Fecha </label>
<input type="date" name="Fecha" >
<br>
<label for="Hora"> Hora </label>
<input type="time" name="Hora" > 
<br>
<input type="submit" value="Guardar">
<br>


</form>

@endsection