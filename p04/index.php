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
    <hr>
    <div>
        <h3>Ejercicio 4</h3>
        <p>Crear un arreglo cuyos <strong>índices</strong> van de 97 a 122 y cuyos <strong>valores</strong> son las letras de la 'a' a la 'z'. Usa la función <strong>chr(n)</strong> que devuelve el caracter cuyo código ASCII es <strong>n</strong> para poner el valor en cada índice. Es decir:</p>
        <p>
            [97] => a <br>
            [98] => b <br>
            [99] => c <br>
            … <br>
            [122] => z
        </p>
        <p>
            R:
            <?php
            $tabla = '<table border>';
            foreach(codeAscii() as $key => $value){
                $tabla .= '<tr>';
                $tabla .= '<td>' . $key . ' => ' . $value . '</td>';
                $tabla .= '</tr>';
            }
            $tabla .= '</table>';
            echo $tabla;
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 5</h3>
        <p>
            Usar las variables <strong>$edad</strong> y <strong>$sexo</strong> en una instrucción if para identificar una persona de sexo "femenino", 
            cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de bienvenida apropiado. Por ejemplo:
        </p>
        <p>
            <em>Bienvenida, usted está en el rango de edad permitido.</em>
        </p>
        <p>
            En caso contrario, deberá devolverse otro mensaje indicando el error.
        </p>
        <ul>
            <li>Los valores para $edad y $sexo se deben obtener por medio de un formulario en HTML.</li>
            <li>Utilizar el la Variable Superglobal $_POST (revisar documentación).</li>
        </ul>
        </p>
        <p>
            R:
            <style>
            fieldset {background-color: #eeeeee;}
            legend {background-color: gray;color: white;padding: 5px 10px;}
            input {margin: 5px;}
            </style>
            <form id="Fromulario H/M" action="script.php" method="post">
            <strong>Registro disponible para mujeres de 18 a 35 años</strong>
            <fieldset>
                <legend>Información Personal</legend>
                <ol>
                <li><label>Sexo (Masculino / Femenino):</label> <input type="text" name="sexo"></li>
                <li><label>Edad:</label> <input type="text" name="edad"></li>
                </ol>
            </fieldset>
            <p>
                <input type="submit" value="Finalizar Registro">
            </p>
            </form>
        </p>
    </div>
    <div>
</body>
</html>