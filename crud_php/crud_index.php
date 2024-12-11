<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud php y msql</title>
    <!--CSS Only-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4ac29d53c5.js" crossorigin="anonymous"></script>
    <?php
            include "modelo/conexion.php";
            include "controlador/registro_persona.php";
            include "controlador/eliminar.php";
            
            ?>
</head>
<body>
    <script> 
    funtion eliminar(){
        var respuest=confirm("Estas dispuesto que deseas eliminar tu usuario?");
        return respuesta
    }
    </script>

    <h1 class="text-center p-3">Crud</h1>
    <?php
    
    ?>
   <div class="container-fluid row">
        <form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center text-secundary">Registro de personas</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
            
                </tr>
            </thead>
            <tbody>
                <?php
                include "modelo/conexion.php";
                $sql=$conexion->query(" select * from personas ");
                while($datos=$sql->fetch_object()){ ?>
                <tr>
                <td><?= $datos->id?></td>
                <td><?= $datos->nombre?></td>
                <td><?= $datos->apellido?></td>
                <td><?= $datos->correo?></td>
                
                <td>
                    <a href="modificar.php?id=<?= $datos->id?>" class="btn btn-small btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a onclick="return eliminar()" href="crud_index.php?id=<?= $datos->id?>" class="btn btn-small btn btn-danger"><i class="fa-solid fa-user-xmark"></i></a>
                </td>
                </tr>
                <?php }
                ?>

            </tbody>
            </table>
        </div>
    </div>
    
 <!-- JavaScriot Bundle with Popper-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>