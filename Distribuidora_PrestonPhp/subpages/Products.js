let productos = [];
let productosFiltrados = [];

document.addEventListener("DOMContentLoaded", function () {
    
    fetch('../resources/archives/products.json')
        .then(response => response.json())
        .then(data => {
            productos = data; // Asignar los productos cargados a la variable productos
            mostrarProductos(productos);
        });
});

function mostrarProductos(listaProductos) {
    const productosContainer = document.getElementById("productos-container");
    productosContainer.innerHTML = ""; // Limpiar el contenedor antes de agregar productos

    listaProductos.forEach(producto => {
        const productoBlock = crearProductoBlock(producto);

        // Añadir evento click para mostrar producto en grande y agregar al carrito
        productoBlock.addEventListener("click", function () {
            mostrarProductoEnGrande(producto);
           
        });

        productosContainer.appendChild(productoBlock);
    });
}

function crearProductoBlock(producto) {
    const productoBlock = document.createElement("div");
    productoBlock.classList.add("producto");
    productoBlock.innerHTML = `
        <img src="${producto.imagen}" alt="${producto.nombre}">
        <h3>${producto.nombre}</h3>
        <p>${producto.descripcion}</p>
        <p>Cantidad: ${producto.cantidad}m</p>
        <p>Precio: $${producto.precio}</p>
        <p>Categoria: ${producto.categoria}</p>
    `;
    return productoBlock;
}

function mostrarProductoEnGrande(producto) {
    const modalContainer = document.getElementById("modal-container");
    const modalImagen = document.getElementById("modal-imagen");
    const modalNombre = document.getElementById("modal-nombre");
    const modalDescripcion = document.getElementById("modal-descripcion");
    const modalCantidad = document.getElementById("modal-cantidad");
    const modalPrecio = document.getElementById("modal-precio");
    const modalCategoria = document.getElementById("modal-categoria");

    // Actualiza el contenido del modal con los detalles del producto
    modalImagen.src = producto.imagen;
    modalNombre.textContent = producto.nombre;
    modalDescripcion.textContent = producto.descripcion;
    modalCantidad.textContent = `Cantidad: ${producto.cantidad}m`;
    modalPrecio.textContent = `Precio: $${producto.precio}`;
    modalCategoria.textContent = `Categoria: ${producto.categoria}`;

    // Muestra el modal
    modalContainer.style.display = "block";
}

function cerrarModal() {
    const modalContainer = document.getElementById("modal-container");
    modalContainer.style.display = "none";
}

function filtrarPorCategoria() {
    const categoriaSeleccionada = document.getElementById("filtrarCategoria").value;
    productosFiltrados = filtrarProductosPorCategoria(productos, categoriaSeleccionada);
    mostrarProductos(productosFiltrados);
}

function filtrarProductosPorCategoria(productos, categoria) {
    if (categoria === "sinSeleccionarCategoria") {
        return productos; // Si no se selecciona ninguna categoría, mostrar todos los productos
    } else {
        return productos.filter(producto => producto.categoria === categoria);
    }
}

function filtrarPorNombre() {
    const nombreBuscado = document.getElementById("buscarNombre").value.toLowerCase();
    productosFiltrados = productos.filter(producto => producto.nombre.toLowerCase().includes(nombreBuscado));
    mostrarProductos(productosFiltrados);
}

function ordenarProductos() {
    const opcionSeleccionada = document.getElementById("ordenar").value;

    switch (opcionSeleccionada) {
        case "precioAscendente":
            productos.sort((a, b) => a.precio - b.precio);
            break;
        case "precioDescendente":
            productos.sort((a, b) => b.precio - a.precio);
            break;
        default:
            // No se seleccionó ninguna opción de orden
            break;
    }

    mostrarProductos(productos);
}

function agregarAlCarrito() {
     // Obtener los detalles del producto desde el modal
     let productoId = document.getElementById('producto_id').value;
     let productoNombre = document.getElementById('producto_nombre').value;
     let productoCantidad = document.getElementById('producto_cantidad').value;
     let productoPrecio = document.getElementById('producto_precio').value;
 
     // Llamar a la función para agregar productos al carrito
     agregarProductosAlCarrito(productoId, productoNombre, productoPrecio);
}







