<!DOCTYPE html>
<html>
<head>
    <title>Registro - Sistema de Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Registro de Usuario</h4>
                    </div>
                    <div class="card-body">
                        <?php if (session('error')): ?>
                            <div class="alert alert-danger"><?= session('error') ?></div>
                        <?php endif; ?>

                        <?php if (session('success')): ?>
                            <div class="alert alert-success"><?= session('success') ?></div>
                        <?php endif; ?>

                        <form method="POST" action="/register">
                            <div class="mb-3">
                                <label>Nombre Completo:</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Contraseña:</label>
                                <input type="password" name="password" class="form-control" required minlength="6">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                        </form>
                        
                        <div class="mt-3 text-center">
                            <a href="/login">¿Ya tienes cuenta? Inicia Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

