@extends('layout.app')

@section('title', 'Nueva experiencia')

@section('content')

<h1>Nueva Experiencia</h1>

<form method="post" action="{{ route ('exps.store') }}">
    @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoría</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <div class="text-center">
        <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        <input type="hidden" value="/img/algo.png" name="img">
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