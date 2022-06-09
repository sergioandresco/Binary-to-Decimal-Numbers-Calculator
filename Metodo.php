<?php
error_reporting(E_ALL^E_NOTICE);
//se obtienen el número del formulario
$binario = $_POST['number'];

//se crea una variable para multiplicar los valores
$a = 1;
$acu = 0;

//se crea el ciclo for para poder recorrer el número ingresado, tomar los digitos de derecha a izquierda
//multiplicarlos por 2 a la potencia desde 0 y por ultimo, sumar cada valor dado en la multiplicación 
for($i=strlen($binario);$i>0;$i--){
    $s = substr($binario, $i-1, 1);
    $resultado = $a * $s;
    $acu = $acu + $resultado;
    $a = $a * 2; 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./estilos.css">

    <title>Conversion</title>
    <center>
        <h1 class="titulo">CONVERSION DEL NUMERO BINARIO A DECIMAL</h1>
    </center>


</head>

<body>

    <br>
    <br>
    <table border= "1" class = "table table-hover">
        <tr class="success">
            <th>Número en Binario</th>
            <th>Número en Decimal</th>
        </tr>
        <tr>
            <th><?php echo $binario; ?></th>
            <th><?php echo $acu; ?></th>
        </tr>
    </table>

    <br>
    <input class="controlBoton" type=""

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    
</body>

</html>



