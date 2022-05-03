@extends('adminlte::page')

@section('title', 'Plataformas')

@section('content_header')
<h1>Plataformas</h1>
@stop

@section('content')
<form action="{{ route('platform.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop


