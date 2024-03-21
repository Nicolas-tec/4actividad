<?php
if (!empty($_GET["Id_estudiante"])) {
    $Id_estudiante=$_GET["Id_estudiante"];
    $sql=$conexion->query("DELETE FROM notas WHERE Id_estudiante='$Id_estudiante'");
    if ($sql==1) {
        echo '<div class="alert alert-success">estudiante eliminado</div>';
    } else {
        echo '<div class="alert alert-danger">ERROR</div>';
    }
    
}
?>