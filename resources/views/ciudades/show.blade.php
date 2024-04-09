<!-- resources/views/ciudades/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Ciudad</h1>
        <p><strong>Nombre:</strong> {{ $ciudad->nombre }}</p>
        <p><strong>País:</strong> {{ $ciudad->pais }}</p>
        <p><strong>Población:</strong> {{ $ciudad->poblacion }}</p>
        <!-- Agregar más detalles según sea necesario -->
        <a href="{{ route('ciudades.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
