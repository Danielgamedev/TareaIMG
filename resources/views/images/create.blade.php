<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Subir Imagen</h1>

        <form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="image" class="form-label">Seleccionar Imagen</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary">Subir</button>
        </form>
    </div>

    <div class="container mt-3">
        <a href="{{ route('welcome') }}">Volver al Inicio</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
