<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"])) {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $correo=$_POST["correo"];
        $sql=$conexion->query(" update PERSONAS set nombre='$nombre', apellido='$apellido', correo='$correo' WHERE id=$id  ");
        if ($sql==1) {
            header("location:crud_index.php");
        } else {
            echo"<div class='alert alert-danger'>Error al modificar productos</div>"; 
        }
        
    }else {
        echo"<div class='alert alert-warning'>campos vacios</div>"; 
    }
}

?>