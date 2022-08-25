@extends('layout.app')

@section('title', 'Experiencias profesionales y formativas')

@section('content')
<h1>Listado de Experiencias</h1>

<div class="row">
    <div class="row m-3 p-2">
        @foreach ($tags as $tag)
            <div class="card m-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $tag->title }}</h5>
                    <p class="card-text"><img src="{{ $tag->img }}" class="img-fluid"></p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="text-center p-4"><a href="{{ route('tags.create') }}" class="btn btn-warning">Nuevo</a></div>

@endsection
