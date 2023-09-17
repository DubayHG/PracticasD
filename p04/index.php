<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 4</title>
</head>
<body>
        <?php
        require_once __DIR__.'/funciones.php';
        ?>

    <div>
        <h3>Ejercicio 1</h3>
        <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7.</p>
        <p>
            R:
            <?php
            if (!empty($_GET['numero'])) {
                $numero = $_GET['numero'];
                echo multiplo5y7($numero);
            } else {
                echo 'No existen parametros en la URL';
            }            
            ?>
        </p>
    </div>
    <hr>

    <div>
        
        <h3>Ejercicio 2</h3>
        <p>
            Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una secuencia compuesta por:
            <br><strong>impar, par, impar</strong>
        </p>
        <p>
            R: </br>
            <?php
            
            $ejercicio2 = matriz(0,0,100,999);
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 3</h3>
        <p>Utiliza un ciclo <strong>while</strong> para encontrar el primer número entero obtenido aleatoriamente, pero que además sea múltiplo de un número dado.</p>
        <p>
        <strong>Ciclo While R:</strong>
            <?php
            if (!empty($_GET['numero'])) {
                $numero = $_GET['numero'];
                echo cicloWhile($numero);
            } else {
                echo 'No existen parametros en la URL';
            }
            ?>
    </br>
        <strong>Ciclo Do While R:</strong>
            <?php
            if (!empty($_GET['numero'])) {
                $numero = $_GET['numero'];
                echo cicloDoWhile($numero);
            } else {
                echo 'No existen parametros en la URL';
            }
            ?>
        </p>
    </div>
</body>
</html>