<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Mujeres Emprendedoras</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
    <div class="container">
        <div class="login-card">
            <h1>Bienvenida 💜</h1>
            <p>Accede a tu cuenta para continuar</p>

            <!-- Formulario listo para procesar con PHP -->
            <form action="procesar_login.php" method="POST">
                <div class="input-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
                </div>

                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn-login">Iniciar sesión</button>

                <div class="extra-links">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                    <a href="registro.php">Crear una cuenta</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>