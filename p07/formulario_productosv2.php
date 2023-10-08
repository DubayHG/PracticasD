<!DOCTYPE html >
<html>

    <head>
        <meta charset="utf-8" >
        <title>Registro de Productos</title>
    </head>

    <body>
        <h1 align="center">Registra Nuevos Relojes</h1>

        <p>Captura todos los datos correctamente</p>

        <form id="formularioProductos" onsubmit="return validar()" action="http://localhost/tecnologiasWeb/practicas/p07/set_producto_v3.php" method="post">

            <fieldset>
                <legend>Nuevo Producto</legend>
                <ul>
                    <li><label>Nombre: <input type="text" id="form-name" name="form-name"></input></label></li></br>
                    <li><label>Marca: </label>
                        <ul>
                            <li><label>Rolex<input type="radio" id="form-marca" name="form-marca" value="MATTEL"></input></label></li>
                            <li><label>Omega<input type="radio" id="form-marca" name="form-marca" value="AURORA"></input></label></li>
                            <li><label>Cartier<input type="radio" id="form-marca" name="form-marca" value="DISNEY STORE"></input></label></li>
                            <li><label>Tudor<input type="radio" id="form-marca" name="form-marca" value="TY"></input></label></li>
                            <li><label>Breitling<input type="radio" id="form-marca" name="form-marca" value="MARVEL"></input></label></li>
                            <li><label>Richard Mille<input type="radio" id="form-marca" name="form-marca" value="JAZWARES"></input></label></li></br>
                        </ul>
                    </li>
                    <li><label>Modelo: <input type="text" id="form-model" name="form-model"></input></label></li></br>
                    <li><label>Precio: <input type="text" id="form-price" name="form-price"></input></label></li></br>
                    <li><label>Detalles: (Opcional) <input type="text" id="form-detail" name="form-detail"></input></label></li></br>
                    <li><label>Unidades: <input type="text" id="form-unit" name="form-unit"></input></label></li></br>
                    <li><label>Nombre del archivo de imagen: (Opcional) <input type="text" id="form-image" name="form-image"></input></label></li>
                </ul>
            </fieldset>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset">
        </p>
        </form>
        </br>
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

            
            
            var regexName = /^[a-zA-Z0-9ñ ]+$/;
            var regexModel = /^[-a-zA-Z0-9 ]+$/;
            var regexPrice = /^[0-9.,]+$/;
            var regexDetails = /^[a-zA-Z0-9.%:,+ñ ]+$/;
            var regexUnits = /^[0-9]+$/;
            var regexImage = /^[-a-zA-Z0-9._ñ]+$/;

            if(nombre == "" || modelo == "" || precio == "" || unidades == ""){
                validacion = false;
                alert('Se detectaron campos requeridos vacios.');
            }
            if(!document.querySelector('input[name="form-marca"]:checked')){
                validacion = false;
                alert('Debe seleccionar una marca.');
            }
            if (regexName.test(nombre) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Nombre".');
            }
            if (regexModel.test(modelo) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Modelo".');
            }
            if (regexPrice.test(precio) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Precio".');
            }
            if (detalles != ""){
                if(regexDetails.test(detalles) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Detalles".');
                }
            }
            if (regexUnits.test(unidades) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Unidades".');
            }
            if (nombre.length > 100){
                validacion = false;
                alert('El nombre no debe superar los 100 caracteres.');
            }
            if (modelo.length > 25){
                validacion = false;
                alert('El modelo no debe superar los 25 caracteres.');
            }
            if (precio <= 99.99){
                validacion = false;
                alert('El precio debe ser mayor a 99.99.');
            }
            if (detalles.length > 250){
                validacion = false;
                alert('Los detalles no deben superar los 250 caracteres.');
            }
            if (unidades < 0){
                validacion = false;
                alert('Las unidades deben ser mayores o iguales que cero.');
            }
            if (imagen.length > 40){
                validacion = false;
                alert('El nombre la imagen no debe superar los 40 caracteres.');
            }
            if(imagen == ""){
                if(validacion == true){
                    document.getElementById("form-image").value = "img/default.png";
                }  
            }else{
                if(regexImage.test(imagen) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Nombre del archivo de imagen".');
                }else{
                    if(validacion == true){
                    let imgString = "img/";
                    document.getElementById("form-image").value = imgString+document.getElementById("form-image").value;
                    }
                }
            }

            return validacion;
        }
        </script>
        <h1 align="center">Modifica Relojes</h1>

        <p>Captura todos los datos correctamente</p>

        <form id="formularioModProductos" onsubmit="return validar2()" action="http://localhost/tecnologiasweb/practicas/p07/set_producto_v3.php" method="post">

            <fieldset>
                <legend>Reloj Existente</legend>
                <ul>
                    <li><label>Nombre: <input type="text" id="form-name2" name="form-name2" value="<?=$_POST['nombre-form']?>"></input></label></li></br>
                    <li><label>Marca: </label>
                        <ul>
                            <li><label>Rolex<input type="radio" id="form-marca" name="form-marca" value="Rolex"></input></label></li>
                            <li><label>Omega<input type="radio" id="form-marca" name="form-marca" value="Omega"></input></label></li>
                            <li><label>Cartier<input type="radio" id="form-marca" name="form-marca" value="Cartier"></input></label></li>
                            <li><label>Tudor<input type="radio" id="form-marca" name="form-marca" value="Tudor"></input></label></li>
                            <li><label>Breitling<input type="radio" id="form-marca" name="form-marca" value="Breitling"></input></label></li>
                            <li><label>Richard Mille<input type="radio" id="form-marca" name="form-marca" value="Richard Mille"></input></label></li></br>
                        </ul>
                    </li>
                    <li><label>Modelo: <input type="text" id="form-model2" name="form-model2" value="<?=$_POST['model-form']?>"></input></label></li></br>
                    <li><label>Precio: <input type="text" id="form-price2" name="form-price2" value="<?=$_POST['precio-form']?>"></input></label></li></br>
                    <li><label>Detalles: (Opcional) <input type="text" id="form-detail2" name="form-detail2" value="<?=$_POST['detail-form']?>"></input></label></li></br>
                    <li><label>Unidades: <input type="text" id="form-unit2" name="form-unit2" value="<?=$_POST['unit-form']?>"></input></label></li></br>
                    <li><label>Nombre del archivo de imagen: (Opcional) <input type="text" id="form-image2" name="form-image2" value="<?=$_POST['image-form']?>"></input></label></li>
                </ul>
            </fieldset>
            <input type="hidden" id="id-form" name="id-form" value="<?=$_POST['id-form']?>" />
        <p>
            <input type="submit" value="Enviar">
            <input type="reset">
        </p>
        </form>

        <script>
            var radioButtons = document.getElementsByName("form-marca2");
            var test = "<?=$_POST['marca-form'] ?>";
            for(var i = 0; i < radioButtons.length; i++){
                if(radioButtons[i].value == test){
                    radioButtons[i].checked = true;
                }
            }
        </script>

        <script>
            function validar2(){

            var validacion = true;

            var nombre = document.getElementById("form-name2").value;
            var marca = document.getElementById("form-marca2").value;
            var modelo = document.getElementById("form-model2").value;
            var precio = document.getElementById("form-price2").value;
            var detalles = document.getElementById("form-detail2").value;
            var unidades = document.getElementById("form-unit2").value;
            var imagen = document.getElementById("form-image2").value;

            
            
            var regexName = /^[a-zA-Z0-9ñ ]+$/;
            var regexModel = /^[-a-zA-Z0-9 ]+$/;
            var regexPrice = /^[0-9.,]+$/;
            var regexDetails = /^[a-zA-Z0-9.%:,+ñ ]+$/;
            var regexUnits = /^[0-9]+$/;
            var regexImage = /^[-a-zA-Z0-9._ñ]+$/;

            if(nombre == "" || modelo == "" || precio == "" || unidades == ""){
                validacion = false;
                alert('Se detectaron campos requeridos vacios.');
            }
            if(!document.querySelector('input[name="form-marca2"]:checked')){
                validacion = false;
                alert('Debe seleccionar una marca.');
            }
            if (regexName.test(nombre) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Nombre".');
            }
            if (regexModel.test(modelo) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Modelo".');
            }
            if (regexPrice.test(precio) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Precio".');
            }
            if (detalles != ""){
                if(regexDetails.test(detalles) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Detalles".');
                }
            }
            if (regexUnits.test(unidades) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Unidades".');
            }
            if (nombre.length > 100){
                validacion = false;
                alert('El nombre no debe superar los 100 caracteres.');
            }
            if (modelo.length > 25){
                validacion = false;
                alert('El modelo no debe superar los 25 caracteres.');
            }
            if (precio <= 99.99){
                validacion = false;
                alert('El precio debe ser mayor a 99.99.');
            }
            if (detalles.length > 250){
                validacion = false;
                alert('Los detalles no deben superar los 250 caracteres.');
            }
            if (unidades < 0){
                validacion = false;
                alert('Las unidades deben ser mayores o iguales que cero.');
            }
            if (imagen.length > 40){
                validacion = false;
                alert('El nombre la imagen no debe superar los 40 caracteres.');
            }
            if(imagen == ""){
                if(validacion == true){
                    document.getElementById("form-image2").value = "img/default.png";
                }  
            }else{
                if(regexImage.test(imagen) != true){
                validacion = false;
                alert('Hay caracteres invalidos en el campo "Nombre del archivo de imagen".');
                }else{
                    if(validacion == true){
                    let imgString = "img/";
                    document.getElementById("form-image2").value = imgString+document.getElementById("form-image2").value;
                    }
                }
            }

            return validacion;
        }
        </script>
    </body>
</html>