<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Encuesta en curso</h1>
    <?php
    require_once("class/respuestas.php");
    $usuario = $_COOKIE['usuario'];
    $obj_encuesta = new encuesta();
    $result_encuestas  = $obj_encuesta->consultar_encuesta($usuario);
    $npregunta = sizeof($result_encuestas);


    print("<table>\n");
    print("<tr>\n");
    print("<th>Preguntas</th>\n");
    print("<th>Porcentaje</th>\n");
    print("<th>Representación Gráfica</th>\n");
    print("<tr>\n");
    $porcentaje = round(($npregunta/10)*100,2);
    print("<tr>\n");
    print("<td class = 'derecha'>$npregunta</td>\n");
    print("<td class = 'derecha'>$porcentaje%</td>\n");
    print("<td class = 'izquierda' width='400'><img src='img/puntoamarillo.gif' height='10' width='". $porcentaje*4 ."'></td>\n");
    print("<tr>\n");
    print("</table>\n");
    ?>
    <br>
    <?php if($npregunta == 10){
        ?>
        <a href="menu.php"name="siguiente">Terminar</a>
        <?php
    }else{
    ?>
    <a href="main.php?user=<?php echo $usuario; ?>"name="siguiente">Siguiente pregunta</a>
    <?php
    }
    ?>
</body>
</html>