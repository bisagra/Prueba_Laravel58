@extends('Template')

@section('title', 'Productos')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{url('prueba_laravel/agregar')}}">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre: </label>
    <input type="text" class="form-control" name="Nombre" value="{{old('Nombre')}}">
        <label for="nombre">Edad: </label>
        <input type="text" class="form-control" name="Edad" value="{{old('Edad')}}">
        <label for="nombre">Fecha: </label>
        <input type="date" class="form-control" name="Fecha" value="{{old('Fecha')}}">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>
@endsection
