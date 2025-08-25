$(document).ready(function () {
    $('#miFormulario').submit(function (e) {
        e.preventDefault();
        const nombre = $('#nombre').val().trim();
        const apellido = $('#apellido').val().trim();

        if (nombre && apellido) {
            $('#mensaje').text('Validación exitosa');
        } else {
            $('#mensaje').text('Por favor, llene ambos campos');
        }
    });

    $('#toggleClase').click(function () {
        $('#bloqueTexto').toggleClass('resaltado');
    });

    $('#mostrarOcultar').click(function () {
        $('#parrafo').toggle();
    });
});
