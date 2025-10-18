<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro de Emprendedoras</title>
    <link rel="stylesheet" href="../styles/registrar.css">
    <script>
        function validarFormulario() {
            const pass = document.getElementById("password").value;
            const pass2 = document.getElementById("password2").value;

            if (pass !== pass2) {
                alert("Las contraseñas no coinciden");
                return false;
            }
            if (pass.length < 8) {
                alert("La contraseña debe tener al menos 8 caracteres");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <?php if (isset($_GET['exito'])): ?>
        <div class="mensaje exito">¡Registro exitoso!</div>
    <?php elseif (isset($_GET['error'])): ?>
        <div class="mensaje error">Ocurrió un error al registrar.</div>
    <?php endif; ?>

    <div class="container">
        <div class="register-card">
            <h1>Registro de Emprendedoras 💜</h1>
            <p>Completa tus datos para unirte a la comunidad</p>

            <form action="../controllers/UsuarioController.php" method="POST" onsubmit="return validarFormulario()">

                <div class="input-group">
                    <label>Tipo de Identificación</label>
                    <select name="tipo_identificacion" required>
                        <option value="">Selecciona una opción</option>
                        <option value="CC">Cédula de Ciudadanía</option>
                        <option value="TI">Tarjeta de Identidad</option>
                        <option value="CE">Cédula de Extranjería</option>
                    </select>
                </div>

                <div class="input-group">
                    <label>Número de identificación</label>
                    <input type="text" name="numero_identificacion" required>
                </div>

                <div class="input-group">
                    <label>Nombre completo</label>
                    <input type="text" name="nombre_completo" required>
                </div>

                <div class="input-group">
                    <label>Correo electrónico</label>
                    <input type="email" name="correo" required>
                </div>

                <div class="input-group">
                    <label>Número de celular</label>
                    <input type="text" name="celular" required>
                </div>

                <div class="input-group">
                    <label>Intereses</label>
                    <input type="text" name="intereses" placeholder="Ej: Finanzas, Marketing" required>
                </div>

                <div class="input-group">
                    <label>Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="input-group">
                    <label>Confirmar contraseña</label>
                    <input type="password" id="password2" required>
                </div>

                <button type="submit" class="btn-register">Registrarse</button>

                <div class="extra-links">
                    <a href="login.php">¿Ya tienes cuenta? Inicia sesión</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
