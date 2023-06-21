<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina privada</title>
    <link rel="stylesheet" href="{{ asset('css/privado.css') }}">

</head>
<body>

<div class="container">

  <header class="d-flex flex-wrap aling-items-center justify-content-center 
    justify-content-md-between py-3 mb-4 border- bottom">

    <a class="d-flex alingn-items-center col-mb-3 mb-2 mb-md-0
    text-dark text-decoration-none"> 
    Bienvenido @auth  {{Auth::user()->name}} @endauth 
  </a>

    <div class="col-md-3 text-end">
        <a href="{{route('logout')}}"><button type="button" class="btn btn-outline-primary me-2"
        >salir</a>
    </div>
  </header>

</div>

<article class="container">
    <h2>Tu seccion privada</h2>
</article>

</body>
</html>