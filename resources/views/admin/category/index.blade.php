@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
<h1>Categorias</h1>
@stop

@section('content')
<a class="btn btn-primary" href="{{ route('admin.category.create') }}">Agregar</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Categoria</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td class="d-flex">
                <a class="btn btn-success mx-2" href="{{ route('admin.category.edit', $category) }}">Editar</a>
                <form action="{{ route('admin.category.destroy', $category) }}" method="POST">
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
