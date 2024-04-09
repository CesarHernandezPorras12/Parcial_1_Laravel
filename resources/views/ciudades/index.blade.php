<!-- resources/views/ciudades/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ciudades</h1>
        <a href="{{ route('ciudades.create') }}" class="btn btn-primary mb-3">Crear Ciudad</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>País</th>
                    <th>Población</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ciudades as $ciudad)
                    <tr>
                        <td>{{ $ciudad->nombre }}</td>
                        <td>{{ $ciudad->pais }}</td>
                        <td>{{ $ciudad->poblacion }}</td>
                        <td>
                            <a href="{{ route('ciudades.show', $ciudad->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('ciudades.edit', $ciudad->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('ciudades.destroy', $ciudad->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
