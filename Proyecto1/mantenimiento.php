<?php
include "class/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Mantenimiento</title>
</head>
<body>
    <center>
    <h1>Mantenimiento</h1>
    <a href="menu.php"name="siguiente">Regresar al menu</a><br>
    <a href="agregar-pregunta.php">Agregar pregunta</a><br><br><hr>
    </center>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php
   $consulta = mysqli_query($mysqli, "SELECT numero_preg, contenido FROM preguntas");
   if ($mysqli) {
    while($row = mysqli_fetch_array($consulta)) {
        echo "<p style='text-align:center;'>Pregunta Nº{$row['numero_preg']} </p>".
           "<p style='text-align:center;'>{$row['contenido']} </p>";
           print "<p style='text-align:center;'><a href='editar-pregunta.php?a={$row['numero_preg']}' style='text-align:center;'>Editar</a></p>";
           print "<p style='text-align:center;'><a href='class/eliminar-pregunta.php?a={$row['numero_preg']}'>  Eliminar</a></p><br/>";
           echo "<hr><br>";
        } 
    } else {
   echo "Ha habido algún error.";
   }
   mysqli_close($mysqli);
?>