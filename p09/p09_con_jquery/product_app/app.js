var baseJSON = {
    "precio": 0.0,
    "unidades": 1,
    "modelo": "XX-000",
    "marca": "NA",
    "detalles": "NA",
    "imagen": "img/default.png"
  };

function init() {

    var JsonString = JSON.stringify(baseJSON,null,2);
    $("#description")[0].value = JsonString;
    
    listarProductos();
}

function listarProductos() {
    var client = getXMLHttpRequest();
    client.open('GET', './backend/product-list.php', true);
    client.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    client.onreadystatechange = function () {
    
        if (client.readyState == 4 && client.status == 200) {
    
            let productos = JSON.parse(client.responseText);
    
            if(Object.keys(productos).length > 0) {
    
                let template = '';
    
                productos.forEach(producto => {
    
                    let descripcion = '';
                    descripcion += '<li>precio: '+producto.precio+'</li>';
                    descripcion += '<li>unidades: '+producto.unidades+'</li>';
                    descripcion += '<li>modelo: '+producto.modelo+'</li>';
                    descripcion += '<li>marca: '+producto.marca+'</li>';
                    descripcion += '<li>detalles: '+producto.detalles+'</li>';
                
                    template += `
                        <tr productId="${producto.id}">
                            <td>${producto.id}</td>
                            <td>${producto.nombre}</td>
                            <td><ul>${descripcion}</ul></td>
                            <td>
                                <button class="product-delete btn btn-danger" onclick="eliminarProducto()">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                    `;
                });
                $("#products")[0].innerHTML = template;
            }
        }
    };
    client.send();
}

function buscarProducto(e) {

    e.preventDefault();

    var search = $("#search")[0].value;

    var client = getXMLHttpRequest();
    client.open('GET', './backend/product-search.php?search='+search, true);
    client.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    client.onreadystatechange = function () {

        if (client.readyState == 4 && client.status == 200) {

            let productos = JSON.parse(client.responseText);
            
            if(Object.keys(productos).length > 0) {

                let template = '';
                let template_bar = '';

                productos.forEach(producto => {

                    let descripcion = '';
                    descripcion += '<li>precio: '+producto.precio+'</li>';
                    descripcion += '<li>unidades: '+producto.unidades+'</li>';
                    descripcion += '<li>modelo: '+producto.modelo+'</li>';
                    descripcion += '<li>marca: '+producto.marca+'</li>';
                    descripcion += '<li>detalles: '+producto.detalles+'</li>';
                
                    template += `
                        <tr productId="${producto.id}">
                            <td>${producto.id}</td>
                            <td>${producto.nombre}</td>
                            <td><ul>${descripcion}</ul></td>
                            <td>
                                <button class="product-delete btn btn-danger" onclick="eliminarProducto()">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                    `;

                    template_bar += `
                        <li>${producto.nombre}</il>
                    `;
                });

                $("#product-result")[0].className = "card my-4 d-block";

                $("#container")[0].innerHTML = template_bar;

                $("#products")[0].innerHTML = template;
            }
        }
    };
    client.send();
}

function agregarProducto(e) {
    e.preventDefault();

    var productoJsonString = $("#description")[0].value;

    var finalJSON = JSON.parse(productoJsonString);

    finalJSON['nombre'] = $("#name")[0].value;

    productoJsonString = JSON.stringify(finalJSON,null,2);

    var client = getXMLHttpRequest();
    client.open('POST', './backend/product-add.php', true);
    client.setRequestHeader('Content-Type', "application/json;charset=UTF-8");
    client.onreadystatechange = function () {

        if (client.readyState == 4 && client.status == 200) {
            console.log(client.responseText);

            let respuesta = JSON.parse(client.responseText);

            let template_bar = '';
            template_bar += `
                        <li style="list-style: none;">status: ${respuesta.status}</li>
                        <li style="list-style: none;">message: ${respuesta.message}</li>
                    `;
                    
            $("#product-result")[0].className = "card my-4 d-block";

            $("#container")[0].innerHTML = template_bar;

            listarProductos();
        }
    };
    client.send(productoJsonString);
}

function eliminarProducto() {
    if( confirm("¿De verdad deseas eliminar el producto seleccionado?") ) {
        var id = event.target.parentElement.parentElement.getAttribute("productId");

        var client = getXMLHttpRequest();
        client.open('GET', './backend/product-delete.php?id='+id, true);
        client.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        client.onreadystatechange = function () {

            if (client.readyState == 4 && client.status == 200) {

                let respuesta = JSON.parse(client.responseText);

                let template_bar = '';
                template_bar += `
                            <li style="list-style: none;">status: ${respuesta.status}</li>
                            <li style="list-style: none;">message: ${respuesta.message}</li>
                        `;

                $("#product-result")[0].className = "card my-4 d-block";

                $("#container")[0].innerHTML = template_bar;

                listarProductos();
            }
        };
        client.send();
    }
}

function getXMLHttpRequest() {
    var objetoAjax;

    try{
        objetoAjax = new XMLHttpRequest();
    }catch(err1){

        try{
            objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
        }catch(err2){
            try{
                objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(err3){
                objetoAjax = false;
            }
        }
    }
    return objetoAjax;
}