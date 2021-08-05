@extends('modelo.plantilla')

@section('title', 'Página de Información')

@section('content')
    <h1>Dejar Información</h1>

    <form action="{{route('informacion.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" required>
        </label>
        <br>

        <label>
            Correo:
            <br>
            <input type="text" name="correo" required|email|max:255|unique:users>
        </label>
        <br>
        <label>
            Mejase:
            <br>
            <textarea name="mensaje" rows="5" required></textarea>
        </label>
        <br>
        <button type="submit">Enviar Mensaje</button>
    </form>
@endsection