@extends('adminlte::page')

@section('title', 'Plataformas')

@section('content_header')
<h1>Plataformas</h1>
@stop

@section('content')
<a class="btn btn-primary" href="{{ route('admin.platform.create') }}">Agregar</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Plataforma</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($plataforms as $platform)
        <tr>
            <td>{{ $platform->id }}</td>
            <td>{{ $platform->name }}</td>
            <td class="d-flex">
                <a class="btn btn-success mx-2" href="{{ route('admin.platform.edit', $platform) }}">Editar</a>
                <form action="{{ route('admin.platform.destroy', $platform) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
