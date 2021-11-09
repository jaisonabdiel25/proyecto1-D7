<?php
    include "conexion.php";
    require_once("respuestas.php");


        if(isset($_POST['insertar'])) {
            $sexo = $_POST['sexo'];;
            $edad = $_POST['rango-edad'];
            $salario = $_POST['salario'];
            $provincia = $_POST['provincia'];
            setcookie("sexo",$sexo, time()+60*5);
            setcookie("edad",$edad, time()+60*5);
            setcookie("salario",$salario, time()+60*5);
            setcookie("provincia",$provincia, time()+60*5);
            $consulta = mysqli_query($mysqli, "insert into `datos` (`sexo`, `edad`, `salario`, `provincia`) values ('$sexo', '$edad', '$salario', '$provincia') ");
    
            $obj_usuario = new usuario();
            $usuario = $obj_usuario->contar_usuario();
            
            foreach($usuario as $user){
                $cantidad = $user['COUNT(id)'];
            }
            

            if ($mysqli) {
                echo '<script type="text/javascript"> alert("Se han guardado los datos correctamente...") </script>';
                header("Location: ../main.php?user=".$cantidad."&sexo=".$sexo."&edad=".$edad."&salario=".$salario."&provincia=".$provincia);
                exit();
            } else {
                echo '<script type="text/javascript"> alert("Ha habido algún error...") </script>';
            }
        }
        mysqli_close($mysqli);


?>