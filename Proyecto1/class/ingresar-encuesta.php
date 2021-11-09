<?php
    include "conexion.php";
    require_once("respuestas.php");

    $obj_usuario = new usuario();
    $usuario = $obj_usuario->contar_usuario();
    foreach($usuario as $user){
        $cantidad = $user['COUNT(id)'];
    }

    if($_REQUEST['radio']){
        $respuesta = $_REQUEST['radio'];
    } else if($_REQUEST['check']){
        $respuesta = $_REQUEST['check'];
    }
        if(isset($_POST['siguiente'])) {
            $user = $_COOKIE['usuario'];
            $sexo = $_COOKIE['sexo'];
            $edad = $_COOKIE['edad'];
            $salario = $_COOKIE['salario'];
            $provincia = $_COOKIE['provincia'];
            $pregunta = $_COOKIE['pregunta'];
            $consulta = mysqli_query($mysqli, "insert into `encuesta` (`sexo`, `edad`, `salario`, `provincia`, `respuesta`, `usuario`, `pregunta`) values ('$sexo', '$edad', '$salario', '$provincia', '$respuesta', '$user', '$pregunta') ");
    
            if ($mysqli) {
                echo '<script type="text/javascript"> alert("Se han guardado los datos correctamente...") </script>';
                header("Location: ../grafica.php?user=".$cantidad);
                exit();
            } else {
                echo '<script type="text/javascript"> alert("Ha habido algún error...") </script>';
            }
        }
        mysqli_close($mysqli);


?>