<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Sistema de Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Sistema de Tareas</a>
            <div class="navbar-nav ms-auto">
                <span class="navbar-text me-3">Hola, <?= $user['name'] ?></span>
                <a href="/profile" class="nav-link">Perfil</a>
                <a href="/logout" class="nav-link">Cerrar SesiÃ³n</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dashboard Principal</h4>
                    </div>
                    <div class="card-body">
                        <p>Bienvenido al Sistema de Tareas Escolares</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <h5>Tareas</h5>
                                        <a href="/tasks" class="text-white">Gestionar Tareas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-white bg-success">
                                    <div class="card-body">
                                        <h5>Perfil</h5>
                                        <a href="/profile" class="text-white">Mi Perfil</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

