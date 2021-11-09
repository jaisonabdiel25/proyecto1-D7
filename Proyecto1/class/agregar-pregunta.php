<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar pregunta</title>
</head>
<body>
    <h1>Agregar pregunta</h1>
    <br>
    <form action="agregar-pregunta.php" method="post">
    <label>¿Qué tipo de pregunta desea colocar?</label>
    <select name="preguntas" class="form-select w-25 p-3 cmb" aria-label="Default select example">
        <option value="binario"> Binario </option>
        <option value="simple"> Selección simple </option>
        <option value="multiple"> Selección múltiple </option>
    </select> 
    <br><br>
    <label for="agregar">Agregar pregunta:</label>
    <input type="text" name="agregar">
    <br><br>
    <input type="submit" value="Agregar pregunta" name="insertar">
    </form>
</body>
</html>

<?php

include "conexion.php";

if(isset($_POST['insertar'])) {
    $agregar = $_POST['agregar'];
    $consulta = mysqli_query($mysqli, "insert into `preguntas` (`contenido`) values ('$agregar') ");

    if ($mysqli) {
        header("Location: mantenimiento.php");
        exit();
    } else {
        echo '<script type="text/javascript"> alert("Ha habido algún error...") </script>';
    }
}
mysqli_close($mysqli);

?>