@extends('layout.app')

@section('title', 'Nueva experiencia')

@section('content')

<h1>Nuevo Lenguaje</h1>

<form method="post" action="{{ route ('tags.store') }}" enctype="multipart/form-data">
    @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Fichero</label>
            <input type="file" class="form-control" id="fichero" name="img">
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>


@if ($message= Session::get('success'))

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="bg-success text-white p-2">
                {{$message}}
            </div>
        </div>
    </div>
</div>

@elseif ( $message= Session::get('error'))
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="bg-danger text-white p-2">
                {{$message}}
            </div>
        </div>
    </div>
</div>

@endif

@endsection