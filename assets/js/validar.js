function validar(){
    var nombre, correo, telefono, mensaje, expresion, expresion_2;
    nombre = document.getElementById("nombre").value;
    correo = document.getElementById("correo").value;
    telefono = document.getElementById("telefono").value;
    mensaje = document.getElementById("mensaje").value;

    expresion = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    expresion_2 = /^\d{10}$/;

    if (nombre == "" ||correo == "" || telefono == "" || mensaje == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'lo siento, todos loas campos deben ser llenados'
        });
        return false;
    }
    if (isNaN(telefono)) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'lo siento, el telefono insertado no es número'
        });
        return false;
    }
    if (!expresion_2.test(telefono)) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'lo siento, el telefono debe tener al menos 10 cifras'
        });
        return false;
    }
    if (!expresion.test(correo)) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'lo siento, el correo insertado no es válido'
        });
        return false;
    }
}

