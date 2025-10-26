<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Tareas Escolares</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .feature-box {
            padding: 30px;
            border-radius: 10px;
            margin: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-tasks"></i> Sistema de Tareas
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/login">Iniciar Sesión</a>
                <a class="nav-link" href="/register">Registrarse</a>
            </div>
        </div>
    </nav>

    <!-- Sección hero -->
    <div class="hero-section">
        <div class="container">
            <h1 class="display-4">Bienvenido al Sistema</h1>
            <p class="lead">Inicia sesion o comienza ahora para seguir</p>
            <div class="mt-4">
                <a href="/register" class="btn btn-light btn-lg me-3">Comenzar Ahora</a>
                <a href="/login" class="btn btn-outline-light btn-lg">Iniciar Sesión</a>
            </div>
        </div>
    </div>

    <!-- Características -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box bg-primary text-white">
                    <h3>📚 Organización</h3>
                    <p>Mantén todas tus tareas organizadas en un solo lugar</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box bg-success text-white">
                    <h3>⏰ Recordatorios</h3>
                    <p>No vuelvas a olvidar una fecha de entrega</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box bg-info text-white">
                    <h3>👥 Colaboración</h3>
                    <p>Comparte tareas con profesores y estudiantes</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-4 mt-5">
        <p>&copy; 2024 Sistema de Tareas Escolares. Universidad Mariano Gálvez de Guatemala.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

