<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro de Emprendedoras</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }

        form {
            max-width: 500px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
        }

        button {
            background: #2c89e8;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            cursor: pointer;
        }

        button:hover {
            background: #1c5eb5;
        }

        .mensaje {
            padding: 10px;
            margin-bottom: 10px;
            text-align: center;
            border-radius: 5px;
        }

        .exito {
            background: #c8f7c5;
            color: #2e7d32;
        }

        .error {
            background: #ffcdd2;
            color: #c62828;
        }
    </style>
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

    <form action="../controlador/usuarias_c.php?accion=registrar" method="POST" onsubmit="return validarFormulario()">
        <h2>Registro de Emprendedoras</h2>
        <select name="tipo_identificacion" required>
            <option value="">Tipo de Identificación</option>
            <option value="CC">Cédula de Ciudadanía</option>
            <option value="TI">Tarjeta de Identidad</option>
            <option value="CE">Cédula de Extranjería</option>
        </select>

        <input type="text" name="numero_identificacion" placeholder="Número de identificación" required>
        <input type="text" name="nombre_completo" placeholder="Nombre completo" required>
        <input type="email" name="correo" placeholder="Correo electrónico" required>
        <input type="text" name="celular" placeholder="Número de celular" required>

        <input type="text" name="intereses" placeholder="Intereses (Ej: Finanzas, Marketing)" required>

        <input type="password" id="password" name="password" placeholder="Contraseña" required>
        <input type="password" id="password2" placeholder="Confirmar contraseña" required>

        <button type="submit">Registrarse</button>
    </form>

</body>

</html>