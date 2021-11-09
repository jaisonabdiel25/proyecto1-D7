<?php
include "conexion.php";
$num = $_GET['a'];
echo $num;
if(array_key_exists('enviar', $_POST)) {
    $texto = $_POST['editar'];
    $consulta = mysqli_query($mysqli, "update preguntas set contenido='$texto' where numero_preg='$num'");

if ($mysqli) {
    header("Location: mantenimiento.php");
    exit();
} else {
    echo '<script type="text/javascript"> alert("Ha habido algún error...") </script>';
}
mysqli_close($mysqli);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar pregunta</title>
</head>
<body>
    <h1>Pregunta Número: <?php echo $num ?></h1>
    <form action="editar-pregunta.php?a=<?php echo $num?>" method="post">
    <label for="editar">Edite su pregunta:</label>
    <br><br>
    <input type="text" name="editar">
    <br><br>
    <input type="submit" value="Editar pregunta" name="enviar">
    </form>
</body>
</html>