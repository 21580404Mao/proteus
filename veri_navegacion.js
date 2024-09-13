// Simulamos un conjunto de credenciales válidas (puedes cambiar esto por la verificación real en el servidor)
const validEmail = "usuario@proteus.com";
const validPassword = "1234";

// Función para manejar el inicio de sesión
function handleLogin(event) {
    event.preventDefault();  // Prevenimos que el formulario recargue la página
    
    // Obtenemos los valores del formulario
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Verificamos las credenciales (este paso debe ser en el servidor en producción)
    if (email === validEmail && password === validPassword) {
        alert('Inicio de sesión exitoso');
        console.log("Redirigiendo al menú principal...");
        window.location.href = "menu.php";  // redirige al menú principal de PHP
    } else {
        alert('Email o contraseña incorrectos.');
    }
}

// Función para manejar la navegación a los diferentes módulos
function navigateTo(page) {
    window.location.href = page;
}

// Añadimos el evento al formulario de login cuando se envía
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.querySelector('form');
    if (loginForm) {
        loginForm.addEventListener('submit', handleLogin);
    }

    // Añadimos eventos a los botones del menú si existen
    const menuItems = document.querySelectorAll('.navbar ul li a');
    menuItems.forEach((item) => {
        item.addEventListener('click', function(event) {
            event.preventDefault();  // Evitar comportamiento por defecto
            const targetPage = event.target.getAttribute('href');  // Obtenemos el destino
            navigateTo(targetPage);  // Redirigimos a la página correspondiente
        });
    });
});
