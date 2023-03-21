function formatearTelefono() {
    let telefono = document.getElementById("telefono").value.replace(/[^0-9]/g, "")
    if (telefono.length > 4) {
        telefono = telefono.slice(0, 4) + "-" + telefono.slice(4);
    }
    document.getElementById("telefono").value = telefono;

}

function formatearDUI() {
    let dui = document.getElementById("dui").value.replace(/\D/g,'');
    if (dui.length > 0) {
        dui = dui.substring(0, 8) + "-" + dui.substring(8, 9);
    }
    document.getElementById("dui").value = dui;

    // Validar la longitud del campo
    let minlength = 10;
    let field = document.getElementById("dui");
    if (field.value.length < minlength) {
        field.setCustomValidity("Tu numero de DUI debe tener 10 digitos (sin espacios ni guiones).");
    } else {
        field.setCustomValidity("");
    }
}

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()
