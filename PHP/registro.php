<?php
if (!empty($_POST["registrar"])) {
    if (!empty($_POST["Nombre_completo"]) and !empty($_POST["Materias_aprobadas"]) and !empty($_POST["Materias_reprobadas"]) and !empty($_POST["Materias_desctacadas"]) and !empty($_POST["Total_materias"])) {
        $Nombre_completo=$_POST["Nombre_completo"];
        $Materias_aprobadas=$_POST["Materias_aprobadas"];
        $Materias_reprobadas=$_POST["Materias_reprobadas"];
        $Materias_desctacadas=$_POST["Materias_desctacadas"];
        $Total_materias=$_POST["Total_materias"];
        $sql=$conexion->query("INSERT INTO notas(Nombre_completo, Materias_aprobadas, Materias_reprobadas, Materias_desctacadas, Total_materias) VALUES ('$Nombre_completo','$Materias_aprobadas','$Materias_reprobadas','$Materias_desctacadas','$Total_materias')");
        if ($sql==1) {
            echo '<div class="alert alert-success">informacion almacenada</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR</div>';
        }
    }else{
        echo '<div class="alert alert-warning">ERROR</div>';
    }
}
?>