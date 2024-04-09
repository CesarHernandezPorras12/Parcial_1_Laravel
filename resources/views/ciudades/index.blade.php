<!-- resources/views/ciudades/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ciudades</h1>
        <a href="{{ route('ciudades.create') }}" class="btn btn-primary mb-3">Crear Ciudad</a>
        <form action="{{ route('ciudades.index') }}" method="GET">
            @csrf
        <div class="input-group mb-3">
        <select id="campo" name="campo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected>Selecciones Filtro</option>
    <option value="nombre">Nombre</option>
    <option value="pais">País</option>
    <option value="clima">clima</option>
  </select>
  <input type="text" class="form-control" id="value" name="value" aria-label="Text input with dropdown button">
  <button type="submit" class="btn btn-primary">Filtrar Ciudad</button>
  </div>
  </form>
</div>
            <tbody>
                @foreach($ciudades as $ciudad)
                        <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$ciudad ->nombre}}</h5>
                        <div class="row">
                            <div class="col-6"><h6>Ciudad:</h6></div>
                            <div class="col-6"><p>{{$ciudad ->nombre}}</p></div>
                            <div class="col-6"><h6>Pais:</h6></div>
                            <div class="col-6"><p>{{$ciudad ->pais}}</p></div>
                            <div class="col-6"><h6>Poblacion:</h6></div>
                            <div class="col-6"><p>{{$ciudad ->poblacion}}</p></div>
                            <div class="col-6"><p>{{$city= $ciudad ->capital==1?'True':'False'}}</p></div>
                            <div class="col-6"><a href="{{route('ciudades.show',$ciudad->id)}}" class="btn btn-primary">Ver</a></div>
                            <div class="col-6"> <a href="{{ route('ciudades.edit',$ciudad->id)}}" class="btn btn-primary btn-sm">Editar</a>
                            <div class="col-6"><form action="{{ route('ciudades.destroy', $ciudad->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form></div>
                        </div>

                    </div>
                </div>
                </div>
    </div>

                @endforeach        
@endsection
