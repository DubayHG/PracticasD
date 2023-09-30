<!DOCTYPE html >
<html>

    <head>
        <meta charset="utf-8" >
        <title>Registro de Productos</title>
    </head>

    <body>
        <h1 align="center">Registra Nuevos Productos</h1>

        <p>Captura todos los datos correctamente</p>

        <form id="formularioProductos" onsubmit="return validar()" action="http://localhost/tecnologiasWeb/practicas/p06/set_producto_v2.php" method="post">

            <fieldset>
                <legend>Nuevo Producto</legend>
                <ul>
                    <li><label>Nombre: <input type="text" id="form-name" name="form-name"></input></label></li></br>
                    <li><label>Marca: <input type="text" id="form-marca" name="form-marca"></input></label></li></br>
                    <li><label>Modelo: <input type="text" id="form-model" name="form-model"></input></label></li></br>
                    <li><label>Precio: <input type="text" id="form-price" name="form-price"></input></label></li></br>
                    <li><label>Detalles: <input type="text" id="form-detail" name="form-detail"></input></label></li></br>
                    <li><label>Unidades: <input type="text" id="form-unit" name="form-unit"></input></label></li></br>
                    <li><label>Imagen: <input type="text" id="form-image" name="form-image"></input></label></li>
                </ul>
            </fieldset>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset">
        </p>
        </form>

        <script>
            function validar(){
        
            var validacion = true;

            var nombre = document.getElementById("form-name").value;
            var marca = document.getElementById("form-marca").value;
            var modelo = document.getElementById("form-model").value;
            var precio = document.getElementById("form-price").value;
            var detalles = document.getElementById("form-detail").value;
            var unidades = document.getElementById("form-unit").value;
            var imagen = document.getElementById("form-image").value;
            
            var regexName = /^[a-zA-Z ]+$/;
            var regexModel = /^[-a-zA-Z0-9 ]+$/;
            var regexPrice = /^[0-9.,]+$/;
            var regexDetails = /^[a-zA-Z0-9.%:, ]+$/;
            var regexUnits = /^[0-9]+$/;
            var regexImage = /^[-a-zA-Z0-9./_]+$/;

            if(nombre == "" || marca == "" || modelo == "" || precio == "" || detalles == "" || unidades == "" || imagen == ""){
                validacion = false;
                alert('Se detectaron campos vacios.');
            } else if (regexName.test(nombre) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Nombre".');
            } else if (regexName.test(marca) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Marca".');
            }else if (regexModel.test(modelo) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Modelo".');
            }else if (regexPrice.test(precio) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Precio".');
            }else if (regexDetails.test(detalles) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Detalles".');
            }else if (regexUnits.test(unidades) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Unidades".');
            }else if (regexImage.test(imagen) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Imagen".');
            }else if (nombre.length > 100){
                validacion = false;
                alert('El nombre no debe superar los 100 caracteres.');
            }else if (marca.length > 25){
                validacion = false;
                alert('La marca no debe superar los 25 caracteres.');
            }else if (modelo.length > 25){
                validacion = false;
                alert('El modelo no debe superar los 25 caracteres.');
            }else if (precio <= 99.99){
                validacion = false;
                alert('El precio debe ser mayor a 99.99.');
            }else if (detalles.length > 250){
                validacion = false;
                alert('Los detalles no deben superar los 250 caracteres.');
            }else if (unidades < 0){
                validacion = false;
                alert('Las unidades deben ser mayores o iguales que cero.');
            }else if (imagen.length > 40){
                validacion = false;
                alert('La ruta de la imagen no debe superar los 40 caracteres.');
            }

            return validacion;
        }
        </script>

    </body>
</html>