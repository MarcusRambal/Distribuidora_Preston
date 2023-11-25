// Definición de la clase Usuario en JavaScript
class Usuario {
    constructor(nombre, contraseña) {
        this.nombre = nombre;
        this.contraseña = contraseña;
    }

    iniciarSesion() {
        const usuario = prompt("Ingresa tu nombre de usuario: ");
        const contraseña = prompt("Ingresa tu contraseña: ");
        if (usuarios[usuario] === contraseña) {
            console.log(`Inicio de sesión exitoso. ¡Bienvenido, ${usuario}!`);
        } else {
            console.log("Credenciales incorrectas. Por favor, inténtalo nuevamente.");
        }
    }
}

// Definición de la clase Administrador en JavaScript
class Administrador extends Usuario {
    constructor(nombre, contraseña) {
        super(nombre, contraseña);
        this.rol = 'admin';
    }

    agregarProducto() {
       
    }

    eliminarProducto() {
       
    }

    visualizarAdministrador() {
       
    }
}

// Definición de la clase Cliente en JavaScript
class Cliente extends Usuario {
    constructor(nombre, contraseña) {
        super(nombre, contraseña);
        this.rol = 'cliente';
        this.carrito = {}; // Objeto para almacenar productos en el carrito
    }

    visualizarCliente() {
      
    }

    filtrar() {
        
    }

    ordenarMenor() {
        
    }

    ordenarMayor() {
       
    }

    agregarAlCarrito(producto, cantidad) {
       
    }

    eliminarDelCarrito(producto) {
      
    }

    calcularTotal() {
       
    }

    realizarCompra() {
       
    }
}

// Función para registrar usuarios en JavaScript
function registrarUsuario() {
    const nombre = prompt("Ingresa un nombre de usuario: ");
    if (usuarios[nombre]) {
        console.log("El usuario ya existe. Por favor, elige otro.");
        return;
    }
    const contraseña = prompt("Ingresa una contraseña: ");
    const rol = prompt("Selecciona el rol (1 para Administrador, 2 para Cliente): ");
    if (rol === "1") {
        const nuevoUsuario = new Administrador(nombre, contraseña);
        console.log(`Usuario registrado con éxito como ${nuevoUsuario.rol}.`);
    } else if (rol === "2") {
        const nuevoUsuario = new Cliente(nombre, contraseña);
        console.log(`Usuario registrado con éxito como ${nuevoUsuario.rol}.`);
    } else {
        console.log("Opción no válida. Debes seleccionar 1 o 2.");
        return;
    }

    usuarios[nombre] = contraseña;
}

const usuarios = {};
registrarUsuario();
