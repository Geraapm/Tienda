<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="fas fa-store me-2"></i>Tienda Online
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownZapatos" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-shoe-prints me-2"></i>Zapatos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php/zapatos/casuales">
                                <i class="fas fa-walking me-2"></i>Casuales
                            </a></li>
                            <li><a class="dropdown-item" href="index.php/zapatos/deportivos">
                                <i class="fas fa-running me-2"></i>Deportivos
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownVestidos" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-dress me-2"></i>Vestidos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php/vestidos/fiesta">
                                <i class="fas fa-party-horn me-2"></i>Fiesta
                            </a></li>
                            <li><a class="dropdown-item" href="index.php/vestidos/formales">
                                <i class="fas fa-suitcase me-2"></i>Formales
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownJoyas" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-gem me-2"></i>Joyas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php/joyas/plata">
                                <i class="fas fa-snowflake me-2"></i>Plata
                            </a></li>
                            <li><a class="dropdown-item" href="index.php/joyas/oro">
                                <i class="fas fa-sun me-2"></i>Oro
                            </a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="/login" class="btn btn-warning">
                        <i class="fas fa-user me-2"></i>Iniciar Sesión
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
    <div class="success-message" id="success-message"></div>
    <script>
        function mostrarMensaje(mensaje) {
            const mensajeDiv = document.getElementById('success-message');
            mensajeDiv.textContent = mensaje;
            mensajeDiv.style.display = 'block';
            
            setTimeout(() => {
                mensajeDiv.style.display = 'none';
            }, 3000);
        }

        document.addEventListener('DOMContentLoaded', function() {
            const botones = document.querySelectorAll('.btn-agregar-carrito');
            botones.forEach(boton => {
                boton.addEventListener('click', function(e) {
                    e.preventDefault();
                    const url = this.href;
                    // Construir la URL completa
                    const baseUrl = window.location.origin;
                    const completeUrl = baseUrl + url;
                    console.log('URL base:', baseUrl);
                    console.log('URL completa:', completeUrl);
                    
                    fetch(completeUrl, {
                        method: 'GET'
                    })
                    .then(response => {
                        console.log('Respuesta:', response);
                        console.log('Estado:', response.status);
                        return response.json();
                    })
                    .then(data => {
                        console.log('Datos:', data);
                        if (data.success) {
                            mostrarMensaje(data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        console.error('Error completo:', error.stack);
                    });
                });
            });
        });
    </script>
</body>
</html>