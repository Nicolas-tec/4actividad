<?php
if (!empty($_POST["registrar"])) {
    if (!empty($_POST["Nombre_completo"]) and !empty($_POST["Materias_aprobadas"]) and !empty($_POST["Materias_reprobadas"]) and !empty($_POST["Materias_desctacadas"]) and !empty($_POST["Total_materias"]) ) {
        $Nombre_completo=$_POST["Nombre_completo"];
        $Materias_aprobadas=$_POST["Materias_aprobadas"];
        $Materias_reprobadas=$_POST["Materias_reprobadas"];
        $Materias_desctacadas=$_POST["Materias_desctacadas"];
        $Total_materias=$_POST["Total_materias"];
        $sql=$conexion->query("UPDATE notas SET Nombre_completo='$Nombre_completo',`Materias_aprobadas`='$Materias_aprobadas',`Materias_reprobadas`='$Materias_reprobadas',`Materias_desctacadas`='$Materias_desctacadas',`Total_materias`='$Total_materias' WHERE Id_estudiante=$Id_estudiante");
        if ($sql==1) {
            header("location:vista.php");
        } else {
            echo "<div class='alert alert-danger'>ERROR</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>actualizacion fallida</div>";
    }
}
?>