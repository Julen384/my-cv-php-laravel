@extends('layout.app')

@section('title', 'Experiencias profesionales y formativas')

@section('content')
<h1>Listado de Experiencias</h1>

<div class="row">
    <div class="row m-3 p-2">
        @foreach ($exps as $exp)

            <div class="card m-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('exps.edit', $exp->id) }}">{{ $exp->title }}</a></h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $exp-> category }}</h6>
                    <p class="card-text">{{ $exp->description }}</p>

                    <p class="card-text">
                    @foreach ($exp->tags as $tag)
                        <img src="{{ $tag->img }}" style="height: 2em">
                    @endforeach</p>
                </div>
            </div>

        @endforeach
    </div>
</div>

<div class="text-center p-4"><a href="{{ route('exps.create') }}" class="btn btn-warning">Nuevo</a></div>

@endsection
