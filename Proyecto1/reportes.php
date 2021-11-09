<?php

require_once("class/respuestas.php");
include ("class/conexion.php");

$obj_registros= new datos();
$registros = $obj_registros->consultar_registros();
$r = count($registros);
$obj_encuesta = new encuestas();
$encuesta = $obj_encuesta->consultar_encuesta();
foreach($encuesta as $value){
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Reportes</title>
</head>
<body>
    <h1>Reportes</h1>
    <a href="menu.php"name="siguiente">Ir al menu</a>

   <form name="formulario" method="post" action="reportes.php">
        <br>
        Encuestas realizadas por  <select name="campos">
            <option value="sexo" SELECTED>Sexo
            <option value="edad"> Edad
            <option value="salario">Salario
            <option value="provincia">Provincia
        </select>
        Buscar:
        <input type="text" name="valor">
        <input name="buscar" value="Buscar" type="submit">
        <input name="consultarTodos" value="Ver Todos" type="submit">
        
        <label for="">Resgistros Totales: <?php print $r ?></label>

    </form>
    
</body>
</html>
<?php
$obj_encuesta = new encuestas();
$encuesta = $obj_encuesta->consultar_encuesta();

 if(array_key_exists('consultarTodos', $_POST)){
        $obj_encuesta = new encuestas();
        $encuestanew = $obj_encuesta->consultar_encuesta();
    }
    
     if(array_key_exists('buscar', $_POST)){
        $obj_encuesta = new encuestas();
        $encuesta = $obj_encuesta->consultar_encuesta_filtro($_REQUEST['campos'],$_REQUEST['valor']);
    }
   
$nfilas = count($encuesta);

    if($nfilas > 0){
        print ("<TABLE>\n");
        print ("<TR>\n");
        print ("<TH>Sexo</TH>\n");
        print ("<TH>Edad</TH>\n");
        print ("<TH>Salario</TH>\n");
        print ("<TH>Provincia</TH>\n");
        print ("<TH>Pregunta</TH>\n");
        print ("<TH>Respuesta</TH>\n");
        print ("<TH>Usuario</TH>\n");
        print ("</TR>\n");

         foreach ($encuesta as $resultado){
            print ("<TR>\n");
            print ("<TD>" . $resultado['sexo'] . "</TD>\n");
            print ("<TD>" . $resultado['edad'] . "</TD>\n");
            print ("<TD>" . $resultado['salario'] . "</TD>\n");
            print ("<TD>" . $resultado['provincia'] . "</TD>\n");
            print ("<TD>" . $resultado['pregunta'] . "</TD>\n");
            print ("<TD>" . $resultado['respuesta'] . "</TD>\n");
            print ("<TD>" . $resultado['usuario'] . "</TD>\n");
           
           
            print("</TR>\n");
        }
        print ("</TABLE>\n");
    }
    else{
        print ("No hay noticias disponibles");
    }
    
    
?>