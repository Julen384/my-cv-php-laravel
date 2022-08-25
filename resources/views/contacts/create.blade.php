@extends('layout.app')

@section('title', 'Contacta conmigo')

@section('content')

<form method="post" action="{{ route ('contact') }}">
    @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">Nunca lo compartiremos</div>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Mensaje</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>

        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="authorize">
            <label class="form-check-label" for="exampleCheck1">Autorizo recibir comuniaciones comerciales...</label>
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