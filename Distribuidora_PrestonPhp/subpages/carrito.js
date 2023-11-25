function actualizarCantidad(producto_id, nuevaCantidad) {
    // Aquí puedes enviar una solicitud al servidor para actualizar la cantidad en el carrito
    console.log(`Actualizar cantidad del producto ${producto_id} a ${nuevaCantidad}`);
}

 function agregarProductosAlCarrito(productoId, productoNombre, productoPrecio) {
        // Obtener la referencia a la tabla
        let tabla = document.querySelector('table');
    
        // Crear una nueva fila
        let fila = tabla.insertRow();
    
        // Añadir celdas a la fila
        let celdaProducto = fila.insertCell(0);
        let celdaCantidad = fila.insertCell(1);
        let celdaPrecioUnitario = fila.insertCell(2);
        let celdaTotal = fila.insertCell(3);
        let celdaAcciones = fila.insertCell(4);
    
        // Configurar el contenido de las celdas
        celdaProducto.textContent = productoNombre;
        celdaCantidad.textContent = '1'; // Puedes ajustar esto según tus necesidades
        celdaPrecioUnitario.textContent = productoPrecio;
        celdaTotal.textContent = productoPrecio; // Precio unitario por la cantidad
        celdaAcciones.innerHTML = '<button onclick="eliminarProducto(this)">Eliminar</button>';
    }




