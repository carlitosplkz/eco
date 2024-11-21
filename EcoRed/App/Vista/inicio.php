<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco-Red - Inicio</title>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif&display=swap" rel="stylesheet">
    <link href="Vista/style/inicio.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="../Asset/Imagenes/logo.png">
            <img src="Asset/Imagenes/logo.png" alt="Logo"> 
            </a>
            <!-- Botón para móvil -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="reciclaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Recicla
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="reciclaDropdown">
                            <li><a class="dropdown-item" href="#">Solicitar recolección</a></li>
                            <li><a class="dropdown-item" href="#">Puntos de recolección</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Noticias y Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beneficios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Imagen debajo del navbar -->
        <div class="card text-bg-dark">
        <img src="Asset/Imagenes/1.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
            <h5 class="card-title">Cuidemos Nuetro Planeta</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small>Last updated 3 mins ago</small></p>
        </div>
    </div>

</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
