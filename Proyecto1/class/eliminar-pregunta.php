<?php

include "conexion.php";

$num = $_GET['a'];
$consulta = mysqli_query($mysqli, "delete from preguntas where numero_preg='$num'");
    
            if ($mysqli) {
                echo '<script type="text/javascript"> alert("Se ha borrado...") </script>';
                header("Location: ../mantenimiento.php");
                exit();
            } else {
                echo '<script type="text/javascript"> alert("Ha habido algún error...") </script>';
            }

        mysqli_close($mysqli);

?>