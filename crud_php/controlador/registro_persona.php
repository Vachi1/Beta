<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("INSERT INTO personas (nombre, apellido, correo) VALUES ('$nombre', '$apellido', '$correo')");

        if ($sql == 1) {
            echo "<div class='alert alert-success'>Persona registrada correctamente</div>";
        } else {
            echo "<div class='alert alert-danger'>Error al registrar persona</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Alguno de los campos está vacío</div>";
    }
}
?>

