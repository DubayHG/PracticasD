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
    <hr>
    <div>
        <h3>Ejercicio 6</h3>
        <p>
        Crea en código duro un arreglo asociativo que sirva para registrar el parque vehicular de
        una ciudad. Cada vehículo debe ser identificado por:
        </p>
        <ul>
            <li>Matricula.</li>
            <li>Auto (Marca, Modelo, Tipo)</li>
            <li>Propietario (Nombre, Ciudad, Dirección)</li>
        </ul>
        <p>
        La matrícula debe tener el siguiente formato LLLNNNN, donde las L pueden ser letras de
        la A-Z y las N pueden ser números de 0-9.
        </br>
        Usa print_r para mostrar la estructura general del arreglo.
        </p>
        <p>
            R:
            <?php
            $parqueVehicular = array();

            $parqueVehicular['UIE8712'] = array(
                'Auto' => array(
                    'Marca' => "Mitsubishi",
                    'Modelo'  => "OUTLANDER PHEV 2023",
                    'Tipo'  => "Limited"
                ),
                'Propietario' => array(
                    'Nombre' => "Jose Antonio Herrera",
                    'Ciudad'  => "Nezahualcoyotl,EdoMEX",
                    'Direccion'  => "San marqueña 31,24"
                )
            );
            $parqueVehicular['IED2890'] = array(
                'Auto' => array(
                    'Marca' => "Toyota",
                    'Modelo'  => "Avanza",
                    'Tipo'  => "Minivan"
                ),
                'Propietario' => array(
                    'Nombre' => "Luis Alejandro Coronel",
                    'Ciudad'  => "Tulcingo del valle, Pue.",
                    'Direccion'  => "San robles,19."
                )
            );
            $parqueVehicular['YEQ8732'] = array(
                'Auto' => array(
                    'Marca' => "Nissan",
                    'Modelo'  => "Altima 2019",
                    'Tipo'  => "Convertible"
                ),
                'Propietario' => array(
                    'Nombre' => "Zeferino Delgado Lopez",
                    'Ciudad'  => "Xochihuehuetlan,Gro.",
                    'Direccion'  => "Los Solitarios 3245."
                )
            );
            $parqueVehicular['JPW0924'] = array(
                'Auto' => array(
                    'Marca' => "Audi",
                    'Modelo'  => "Audi Q8 Sportback e-tron",
                    'Tipo'  => "Coupe"
                ),
                'Propietario' => array(
                    'Nombre' => "Clark Kent",
                    'Ciudad'  => "Metropolis.",
                    'Direccion'  => "859 Union Valdez."
                )
            );
            $parqueVehicular['IOE8093'] = array(
                'Auto' => array(
                    'Marca' => "Seat",
                    'Modelo'  => "Ibiza",
                    'Tipo'  => "Coupe"
                ),
                'Propietario' => array(
                    'Nombre' => "Isaac De la Cruz",
                    'Ciudad'  => "San Isidro,Vrz",
                    'Direccion'  => "C. Las 3 Torres,3214 "
                )
            );
            $parqueVehicular['MXU9027'] = array(
                'Auto' => array(
                    'Marca' => "Suzuki",
                    'Modelo'  => "S-Cross",
                    'Tipo'  => "Minivan"
                ),
                'Propietario' => array(
                    'Nombre' => "Cristian Aramis Hernandez",
                    'Ciudad'  => "Puebla, Puebla.",
                    'Direccion'  => "612 Lago Ness."
                )
            );
            $parqueVehicular['CSJ0234'] = array(
                'Auto' => array(
                    'Marca' => "Volkswagen",
                    'Modelo'  => "Amarok",
                    'Tipo'  => "Todoterreno"
                ),
                'Propietario' => array(
                    'Nombre' => "Alejandra Rivera Ramos",
                    'Ciudad'  => "Izucar de Matamoros,Puebla",
                    'Direccion'  => "C. Las Cruces"
                )
            );
            $parqueVehicular['NXE8922'] = array(
                'Auto' => array(
                    'Marca' => "Ford",
                    'Modelo'  => "Moustang",
                    'Tipo'  => "Coupe"
                ),
                'Propietario' => array(
                    'Nombre' => "Alfredo Calmate Porfabor",
                    'Ciudad'  => "Tlaxcala de Xicohténcatl, Tlaxcala.",
                    'Direccion'  => "Las Bugambilias 555."
                )
            );
            $parqueVehicular['ZKE9233'] = array(
                'Auto' => array(
                    'Marca' => "Jeep",
                    'Modelo'  => "Avenger",
                    'Tipo'  => "Todoterreno"
                ),
                'Propietario' => array(
                    'Nombre' => "Robert Downey J.",
                    'Ciudad'  => "Zacatecas, Zacatecas.",
                    'Direccion'  => "Cama de Piedra,404."
                )
            );
            $parqueVehicular['OPZ0326'] = array(
                'Auto' => array(
                    'Marca' => "Isuzu",
                    'Modelo'  => "D-Max",
                    'Tipo'  => "Camioneta"
                ),
                'Propietario' => array(
                    'Nombre' => "Diego Hernandez Ruiz",
                    'Ciudad'  => "Acapulco,Gro",
                    'Direccion'  => "Los 100 Acres,202"
                )
            );
            $parqueVehicular['HGY4738'] = array(
                'Auto' => array(
                    'Marca' => "Maserati",
                    'Modelo'  => "Ghibili",
                    'Tipo'  => "Descapotable"
                ),
                'Propietario' => array(
                    'Nombre' => "Abner Joab Rivera",
                    'Ciudad'  => "Puerto Escondido, Oaxaca.",
                    'Direccion'  => "Calle Acapulco,11."
                )
            );
            $parqueVehicular['NXY9278'] = array(
                'Auto' => array(
                    'Marca' => "Mercedes",
                    'Modelo'  => "AMG GT",
                    'Tipo'  => "Furgoneta"
                ),
                'Propietario' => array(
                    'Nombre' => "Gehovany Reyes Diaz",
                    'Ciudad'  => "Villahermosa, Tabasco.",
                    'Direccion'  => "Av.Tabasco,77"
                )
            );
            $parqueVehicular['LMO9123'] = array(
                'Auto' => array(
                    'Marca' => "Lexus",
                    'Modelo'  => "RX",
                    'Tipo'  => "SUV"
                ),
                'Propietario' => array(
                    'Nombre' => "Brenda Cuautla Rojas",
                    'Ciudad'  => "Ciudad de Mexico.",
                    'Direccion'  => "Mil Islas,89"
                )
            );
            $parqueVehicular['UED9872'] = array(
                'Auto' => array(
                    'Marca' => "BMW",
                    'Modelo'  => "Serie 4",
                    'Tipo'  => "Convertible"
                ),
                'Propietario' => array(
                    'Nombre' => "Nelson Martinez Martinez",
                    'Ciudad'  => "Benustiano Diaz, Durango",
                    'Direccion'  => "3 Leguas,666"
                )
            );
            $parqueVehicular['MZU1140'] = array(
                'Auto' => array(
                    'Marca' => "Tesla",
                    'Modelo'  => "Model S",
                    'Tipo'  => "Sedan"
                ),
                'Propietario' => array(
                    'Nombre' => "Jeimi miranda Peña",
                    'Ciudad'  => "Culiacan, Sinaloa.",
                    'Direccion'  => "San Valentin,14."
                )
            );
            echo "<pre>";
            print_r($parqueVehicular);
            echo "</pre>";
            ?>
        </p>
        <p>
        Finalmente crea un formulario simple donde puedas consultar la información:
        </p>
        <ul>
            <li>Por matricula de auto.</li>
        </ul>
        <p>
            R:
            <form id="formulario2" action="index.php" method="post">
            <strong>Busqueda por matricula</strong>
            <fieldset>
                <legend>Ingrese la matricula que desea buscar</legend>
                <ol>
                <li><label>Matricula: </label> <input type="text" name="matricula"></li>
                </ol>
            </fieldset>
            <p>
                <input type="submit" value="Buscar">
            </p>
            </form>
            <?php
            

            if (!empty($_POST['matricula'])){
                $busqueda = $_POST['matricula'];
                $fin = true;
                foreach ($parqueVehicular as $key => $value) {
                    if($busqueda == $key){
                        echo "La matricula <strong> $key </strong> contiene los datos:";
                        echo "<pre>";
                        print_r($value);
                        echo "</pre>";
                        $fin = true;
                        break;
                    }else{
                        $fin = false;
                    }
                }
                if($fin == false){
                    echo "La matricula <strong> $busqueda </strong> NO se encuentra en el array";
                }
            }
            ?>
        </p>
    </div>
</body>
</html>
</body>
</html>