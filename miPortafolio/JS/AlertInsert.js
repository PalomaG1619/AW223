
const params = new URLSearchParams(window.location.search);
const estado = params.get("estadophp");

if (estado === "exito") {
    alert("Éxito, tu mensaje fue guardado");
    } else if (estado === "actualizado") {

    alert("Éxito, el mensaje fue actualizado correctamente.");
} else if (estado === "borrado") {

    alert("El mensaje fue eliminado correctamente.");
} else if (estado === "vacios") {
    
    alert("Completa todos los campos antes de actualizar.");
} else if (estado === "error") {
    alert("Algo fallo, intentalo nuevamente");
}

if (estado !== null) {
    window.history.replaceState({}, document.title, window.location.pathname);
}
