<!-- resources/views/ciudades/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Ciudad</h1>
        <form action="{{ route('ciudades.update', $ciudad->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $ciudad->nombre }}">
            </div>
            <div class="form-group">
                <label for="pais">País:</label>
                <input type="text" class="form-control" id="pais" name="pais" value="{{ $ciudad->pais }}">
            </div>
            <div class="form-group">
                <label for="poblacion">Población:</label>
                <input type="number" class="form-control" id="poblacion" name="poblacion" value="{{ $ciudad->poblacion }}">
            </div>
            <!-- Agregar más campos según sea necesario -->
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
@endsection
