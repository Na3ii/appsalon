document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
});

function iniciarApp() {
    buscarPorFercha();
}

function buscarPorFercha() {
    const fechaInput = document.querySelector('#fecha');
    fechaInput.addEventListener('input', function(e) {
        const fechaSeleccionada = e.target.value;

        window.location = `?fecha=${fechaSeleccionada}`;
    })
}

function buscarPorCliente() {
    const clienteInput = document.querySelector('#cliente');
    clienteInput.addEventListener('input', function(e) {
        const nombreCliente = e.target.value;
        console.log(nombreCliente);
        window.location = `?cliente=${nombreCliente}`;
    })
}