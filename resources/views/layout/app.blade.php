<!DOCTYPE html>
<html lang="es">
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route ('index') }}">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route ('exps')}}">Mis Experiencias</a>
                <a class="nav-link" href="{{ route ('tags.index')}}">Lenguajes</a>
                <a class="nav-link" href="{{ route ('contact')}}">Contactar</a>
                <a class="nav-link" href="{{ route ('aboutus')  }}">Sobre mi</a>
            </div>
        </div>
    </div>
</nav>

@yield('content')



<div class="container-fluid">






</div>

</body>
</html>