<?php
include "../PHP/conexion.php";
$Id_estudiante=$_GET["Id_estudiante"];
$sql=$conexion->query("SELECT * FROM notas WHERE Id_estudiante=$Id_estudiante");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .center-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .input-custom {
            width: 400px; 
        }
        footer {
        background-color: #333;
        color: white;
        padding: 20px;
        text-align: center;
        }
        footer div {
        margin-bottom: 20px;
        }
        footer ul {
        list-style: none;
        padding: 0;
        }

        footer ul li {
        display: inline;
        margin-right: 10px;
        }

        footer a {
        color: white;
        text-decoration: none;
        }
    </style>
    <script src="https://kit.fontawesome.com/d73986632c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="center-form">
        <form class="p-3" method="POST">
            <fieldset>
                <legend class="text-center text-md-start text-secondary">actualizar informacion</legend>
                <?php
                include "../PHP/modificar_C.php";
                while ($datos=$sql->fetch_object()) { ?>
                    <div class="mb-3">
                        <input type="text" class="form-control input-custom" placeholder="nombre completo" name="Nombre_completo" value="<?=$datos->Nombre_completo?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control input-custom" placeholder="numero de totales de materias aprobadas" name="Materias_aprobadas" value="<?=$datos->Materias_aprobadas?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control input-custom" placeholder="numero de totales de materias reprobadas" name="Materias_reprobadas" value="<?=$datos->Materias_reprobadas?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control input-custom" placeholder="materias destacadas" name="Materias_desctacadas" value="<?=$datos->Materias_desctacadas?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control input-custom" placeholder="total de materias" name="Total_materias" value="<?=$datos->Total_materias?>">
                    </div>
                <?php } 
                ?>                
                <button type="submit" class="btn btn-primary" name="registrar" value="ok">actualizar</button>
            </fieldset>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
<footer>
    <div>
      <h3>Creador</h3>
      <p>Nicolas Turcy Santos</p>
      <p>Corporación universitaria iberoamericana</p>
      <p>Diplomado en desarrollo web</p>
      <p>Soacha, Cundinamarca </p>
      <p>2024</p>
    </div>
    <div>
      <h3>redes sociales</h3>
      <ul>
        <li><a href="https://m.facebook.com/people/Nicolas-Turcy-Santos/100009155986728/">facebook</a></li>
        <li><a href="https://co.linkedin.com/in/nicolas-turcy-santos-8094a32b0">linkedin</a></li>
        <li><a href="https://www.youtube.com/channel/UCzBBx0OyK6cky-dCzhav7dA">youtube</a></li>
      </ul>
    </div>
    <div>
      <h3>Referencias bibliográficas</h3>
      <ul>
        <li><a href="https://www.youtube.com/watch?v=p1JFNFMc1ps&list=PL-6S8_azQ-MpM0BaKz0VPtnczB6MiOflq&index=1">Como hacer un CRUD EN PHP Y MYSQL | BOOTSTRAP - MVC #01 - Interfaz</a></li><br>
        <li><a href="https://www.youtube.com/watch?v=HKSb_X-GThs&list=PL-6S8_azQ-MpM0BaKz0VPtnczB6MiOflq&index=2">Como hacer un CRUD EN PHP Y MYSQL | BOOTSTRAP - MVC #02 - Listar Personas</a></li><br>
        <li><a href="https://www.youtube.com/watch?v=d5rBapLmmRI&list=PL-6S8_azQ-MpM0BaKz0VPtnczB6MiOflq&index=3">Como hacer un CRUD EN PHP Y MYSQL | BOOTSTRAP - MVC #03 - Registrar</a></li><br>
        <li><a href="https://www.youtube.com/watch?v=L-D_hvMJGOM&list=PL-6S8_azQ-MpM0BaKz0VPtnczB6MiOflq&index=4">Como hacer un CRUD EN PHP Y MYSQL | BOOTSTRAP - MVC #04 - Modificar</a></li><br>
        <li><a href="https://www.youtube.com/watch?v=C9uyDLasQjc&list=PL-6S8_azQ-MpM0BaKz0VPtnczB6MiOflq&index=5">Como hacer un CRUD EN PHP Y MYSQL | BOOTSTRAP - MVC #05 - Eliminar</a></li><br>
      </ul>
    </div>
  </footer>
</html>
