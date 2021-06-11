@extends('layout')

@section('content')

<label for="NombreTorneo"> NombreTorneo </label>
<input type="text" name="NombreTorneo" value="{{ $torneo->NombreTorneo }}">
<br>
<label for="Deporte"> Deporte </label>
<input type="text" name="Deporte" value="{{ $torneo->Deporte }}" >
<br>
<label for="Fecha"> Fecha </label>
<input type="date" name="Fecha" value="{{ $torneo->Fecha  }}">
<br>
<label for="Hora"> Hora </label>
<input type="time" name="Hora" value="{{ $torneo->Hora }}"> 
<br>
<input type="submit" value="Guardar">
<br>

@endsection