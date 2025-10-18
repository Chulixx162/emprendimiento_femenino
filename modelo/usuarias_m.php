<?php 
function registrar($conn, $data) {
    $tipo_identificacion = $data['tipo_identificacion'];
    $numero_identificacion = $data['numero_identificacion'];
    $nombre = $data['nombre'];
    $apellido = $data['apellido'];
    $email = $data['email'];
    $telefono = $data['telefono'];
    $direccion = $data['direccion'];
    $password = password_hash($data['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarias (tipo_identificacion, numero_identificacion, nombre, apellido, email, telefono, direccion, password) 
            VALUES ('$tipo_identificacion', '$numero_identificacion', '$nombre', '$apellido', '$email', '$telefono', '$direccion', '$password')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../vista/registrar.php?exito=1");
        exit();
    } else {
        header("Location: ../vista/registrar.php?error=1");
        exit();
    }
}
?>