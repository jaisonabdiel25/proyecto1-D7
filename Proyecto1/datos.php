<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduzca sus datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/datos.css">
</head>
<body>
    <h1>Introduzca sus Datos</h1>
    
    <form action="class/ingresar-datos.php" method="post">
    <hr>
    <label>Sexo:</label>
    <br><br>
    <select name="sexo" class="form-select w-25 p-3 cmb" aria-label="Default select example">
        <option value="Masculino"> Masculino </option>
        <option value="Femenino"> Femenino </option>
        <option value="Transgénero"> Transgénero </option>
        <option value="Prefiero no decir"> Indefinido </option>
    </select>

    <br>
    <label>Rango de Edad:</label>
    <br><br>
    <select name="rango-edad" class="form-select w-25 p-3 cmb" aria-label="Default select example">
        <option value="18-30"> 18-30 </option>
        <option value="31-40"> 31-40 </option>
        <option value="41-50"> 41-50 </option>
        <option value="Mayor de 51"> 51 o más </option>
    </select>
    
    <br>
    <label>Rango salarial:</label>
    <br><br>
    <select name="salario" class="form-select w-25 p-3 cmb" aria-label="Default select example">
        <option value="Menor de 500"> Menor de B/.500.00 </option>
        <option value="500-850"> B/.500.00 - B/.850.00</option>
        <option value="850-1500"> B/.850.00 - B/.1500.00 </option>
        <option value="Mayor de 1500"> Mayor de B/.1500.00 </option>
    </select>

    <br>
    <label>Provincia:</label>
    <br><br>
    <select name="provincia" class="form-select w-25 p-3 cmb" aria-label="Default select example">
        <option value="Bocas del Toro"> Bocas del Toro </option>
        <option value="Coclé"> Coclé </option>
        <option value="Colón"> Colón </option>
        <option value="Chiriquí"> Chiriquí </option>
        <option value="Darién"> Darién </option>
        <option value="Herrera"> Herrera </option>
        <option value="Los Santos"> Los Santos </option>
        <option value="Panamá"> Panamá </option>
        <option value="Veraguas"> Veraguas </option>
        <option value="Panamá Oeste"> Panamá Oeste </option>
    </select>
    <br><br>
    <input type="submit" value="Iniciar Encuesta" name="insertar" class="btn btn-primary btn-lg">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>