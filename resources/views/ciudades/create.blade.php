<!-- resources/views/ciudades/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Ciudad</h1>
        <form action="{{ route('ciudades.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="pais">País:</label>
                <input type="text" class="form-control" id="pais" name="pais">
            </div>
            <div class="form-group">
                <label for="poblacion">Población:</label>
                <input type="number" class="form-control" id="poblacion" name="poblacion">
            </div>
            <!-- Agregar más campos según sea necesario -->
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
