<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Fotos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">Mi Aplicación</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('images.create') }}">Subir Imagen</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Mis Fotos</h1>
        <div class="row">
            @foreach($images as $image)
            <div class="col-md-6 mb-4"> <!-- Aumenta el ancho de la columna -->
                <div class="card">
                    <img src="{{ asset($image->path) }}" alt="{{ $image->name }}" class="card-img-top img-fluid"> <!-- Aumenta el tamaño de la imagen -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $image->name }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-3">
        <a href="{{ route('welcome') }}">Volver al Inicio</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>