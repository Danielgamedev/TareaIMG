<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Mi Aplicación</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Aplicación</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('images.create') }}">Subir Imagen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('images.index') }}">Ver Imágenes</a> 
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Bienvenido a Mi Aplicación</h1>
        <p>¡Aquí puedes hacer cosas geniales!</p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>




   


