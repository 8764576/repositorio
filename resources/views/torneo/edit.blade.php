@extends('layout')

@section('content')

<form action="{{ route('torneo.update', $torneo) }}" method="POST">
@csrf
@method('PUT')

@include('torneo.form');

</form>

@endsection
