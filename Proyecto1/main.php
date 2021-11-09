<?php
require_once("class/respuestas.php");
include("class/conexion.php");

if ($_GET['sexo']) {
    $usuario = $_GET['user'];
    $sexo = $_GET['sexo'];
    $edad = $_GET['edad'];
    $salario = $_GET['salario'];
    $provincia = $_GET['provincia'];
    setcookie("usuario", $usuario, time() + 60 * 8);
    setcookie("sexo", $sexo, time() + 60 * 40);
    setcookie("edad", $edad, time() + 60 * 5);
    setcookie("salario", $salario, time() + 60 * 5);
    setcookie("provincia", $provincia, time() + 60 * 5);
} else {
    $user = $_COOKIE['usuario'];
    $sexo = $_COOKIE['sexo'];
    $edad = $_COOKIE['edad'];
    $salario = $_COOKIE['salario'];
    $provincia = $_COOKIE['provincia'];
}

$obj_preguntas = new preguntas();
$preguntas = $obj_preguntas->consultar_preguntas();

foreach ($preguntas as $preg) {
    $question = $preg['numero_preg'];
    $preg = $preg['contenido'];
    setcookie("pregunta", $question, time() + 60 * 5);
}


$obj_respuestas = new respuestas();
$respuestas = $obj_respuestas->consultar_resp($question);
$nfilas = count($respuestas);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
</head>

<body>
    <header>
        <div class="container">
            <h1>Encuesta de deporte</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <p class="question">
                <?php
                echo $preg;
                ?>
            </p>
            <form action="class/ingresar-encuesta.php" method="post">
                <?php
                foreach ($respuestas as $respuesta) {
                    if ($nfilas < 5) { ?>
                        <input type="radio" name="radio" value=<?php echo $respuesta['tipo_resp']; ?>><?php echo $respuesta['tipo_resp']; ?><br>
                    <?php } else { ?>
                        <input type="checkbox" name="check" value=<?php echo $respuesta['tipo_resp']; ?>><?php echo $respuesta['tipo_resp']; ?><br>
                <?php
                    }
                } ?>
                </ul>
                <input type="submit" name="siguiente" value="Siguiente">
            </form>
        </div>
        <br>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2021, Encuesta de Deporte.
        </div>
    </footer>
</body>

</html>