@extends('plantilla')
@section('secciondinamica')
    <h2>Formulario para el registro de clientes</h2>

    <form action="{{url('/clientes')}}" method="POST">
        @csrf
        
        <label for="">Nombres</label>
        <input type="string" name="nombre" placeholder="Nombres" class="form-control mb-2">

        <label for="">Direccion</label>
        <input type="string" name="direccion" placeholder="Direccion" class="form-control mb-2">

        <label for="">Celular</label>
        <input type="string" name="celular" placeholder="Celular" class="form-control mb-2">

        <button class="btn btn-primary btn-block" type="submit">Insertar cliente</button>

    </form>

@endsection