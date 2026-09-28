
// CAMBIAR TEXTO DE BIENVENIDA

const btnBienvenida = document.getElementById("btnBienvenida");
const bienvenida = document.getElementById("bienvenida");

btnBienvenida.addEventListener("click", function() {

    bienvenida.textContent = "¡Hola! Gracias por visitar mi sitio web.";

});


// CAMBIAR COLOR DE LAS HABILIDADES

const btnColor = document.getElementById("btnColor");
const habilidades = document.querySelectorAll("#lista-habilidades li");

btnColor.addEventListener("click", function() {

    habilidades.forEach(function(habilidad) {

        habilidad.style.backgroundColor = "lightpink";

    });

});


// CAMBIAR TIPOGRAFÍA

const btnFuente = document.getElementById("btnFuente");

btnFuente.addEventListener("click", function() {

    habilidades.forEach(function(habilidad) {

        habilidad.style.fontFamily = "Georgia";

    });

});


// VALIDAR FORMULARIO

const formulario = document.getElementById("formulario");

formulario.addEventListener("submit", function(event) {

    event.preventDefault();

    const nombre = document.getElementById("nombre").value;
    const correo = document.getElementById("correo").value;


    if (nombre === "") {

        alert("Por favor, escribe un nombre.");

        return;
    }


    if (correo === "") {

        alert("Por favor, escribe un correo.");

        return;
    }


    alert("Los datos han sido enviados correctamente.");

});