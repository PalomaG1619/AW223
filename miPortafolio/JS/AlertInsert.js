
const params = new URLSearchParams(window.location.search);
const estado = params.get("estadophp");

if (estado === "exito") {
    alert("Éxito, tu mensaje fue guardado");
} else if (estado === "error") {
    alert("Algo fallo, intentalo nuevamente");
}

if (estado != null) {
    window.history.replaceState({}, document.title, window.location.pathname);
}
