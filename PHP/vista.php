<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curd de notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d73986632c.js" crossorigin="anonymous"></script>
    <style>
        .input-custom {
            width: 350px; 
        }
        th {
            background-color: #dc3545; /* Cambia este color a uno que desees */
            color: red; /* Cambia el color del texto si es necesario */
        }
        .link-container {
            display: flex;
        }
        .link-container a {
            margin-right: 15px;
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
</head>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("deseas eliminar este estudiante?");
            return respuesta
        }
    </script>
    <center>
        <h1>notas de estudiantes</h1>
    </center>
    <?php
    include "../PHP/conexion.php";
    include "../PHP/eliminar.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="p-3" method="POST">
                    <fieldset>
                        <legend class="text-center text-md-start text-secondary">informacion de estudiantes</legend>
                        <?php
                        include "../PHP/conexion.php";
                        include "../PHP/registro.php";
                        ?>
                        <div class="mb-3">
                            <input type="text" class="form-control input-custom" placeholder="nombre completo" name="Nombre_completo">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control input-custom" placeholder="numero de totales de materias aprobadas" name="Materias_aprobadas">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control input-custom" placeholder="numero de totales de materias reprobadas" name="Materias_reprobadas">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control input-custom" placeholder="materias destacadas" name="Materias_desctacadas">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control input-custom" placeholder="total de materias" name="Total_materias">
                        </div>
                        <button type="submit" class="btn btn-primary" name="registrar" value="ok">enviar</button>
                    </fieldset>
                </form>
            </div>
            <div class="col">
                <div class="p-4 table-responsive">
                    <table class="table">
                        <thead class="custom-thead">
                            <tr>
                                <th scope="col" style='background-color:#FF0000;'>id</th>
                                <th scope="col" style='background-color:#FF0000;'>Nombre del estudiante</th>
                                <th scope="col" style='background-color:#FF0000;'>materias parobadas</th>
                                <th scope="col" style='background-color:#FF0000;'>materias reprobadas</th>
                                <th scope="col" style='background-color:#FF0000;'>materias destacadas</th>
                                <th scope="col" style='background-color:#FF0000;'>total de materias</th>
                                <th scope="col" style='background-color:#FF0000;'></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "../PHP/conexion.php";
                            $sql=$conexion->query("SELECT * FROM notas");
                            while($datos=$sql->fetch_object()){ ?>
                                <tr>
                                    <td><?php echo $datos->Id_estudiante; ?></td>
                                    <td><?php echo $datos->Nombre_completo; ?></td>
                                    <td><?php echo $datos->Materias_aprobadas; ?></td>
                                    <td><?php echo $datos->Materias_reprobadas; ?></td>
                                    <td><?php echo $datos->Materias_desctacadas; ?></td>
                                    <td><?php echo $datos->Total_materias; ?></td>
                                    <td>
                                        <div class="link-container">
                                            <a href="../PHP/modificar.php?Id_estudiante=<?=$datos->Id_estudiante?>" class="btn btn-small btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a onclick="return eliminar()" href="../PHP/vista.php?Id_estudiante=<?=$datos->Id_estudiante?>" class="btn btn-small btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
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
      <li><a href="https://m.facebook.com/people/Nicolas-Turcy-Santos/100009155986728/"><i class="fa-brands fa-facebook"></i></a></li>
        <li><a href="https://co.linkedin.com/in/nicolas-turcy-santos-8094a32b0"><i class="fa-brands fa-linkedin"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCzBBx0OyK6cky-dCzhav7dA"><i class="fa-brands fa-youtube"></i></a></li>
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
</body>
</html>
