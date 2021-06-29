function validar2() {
    var nombre,correo,tarjeta,cvv,telefono,expresion2;

    nombre = document.getElementById("nombre").value;
    correo = document.getElementById("correo").value;
    tarjeta = document.getElementById("tarjeta").value;
    cvv = document.getElementById("cvv").value;
    telefono = document.getElementById("telefono").value;
    expresion2 = /^[0-9]{3}/;
    //expresion3 = //;

    if(nombre == "" || tarjeta  == "" || cvv  == "" || telefono  == ""){
        Swal.fire ({
            icon: 'error',
            title: 'Oops...',
            text: 'Debes de llenar todos los campos para procesar tu pago',
        });
        return false;
    }

    else if (isNaN(telefono)) {
        Swal.fire ({
            icon: 'error',
            title: 'Oops...',
            text: 'El telefono ingresado no es número',
        });
        return false;
    }

    else if (isNaN(tarjeta)) {
        Swal.fire ({
            icon: 'error',
            title: 'Oops...',
            text: 'La tarjeta insertada no es número',
        });
        return false;
    }

    else if (isNaN(cvv)) {
        Swal.fire ({
            icon: 'error',
            title: 'Oops...',
            text: 'El CVV ingresado no es número',
        });
        return false;
    }

    else if (!expresion2.test(cvv)) {
        Swal.fire ({
            icon: 'error',
            title: 'Oops...',
            text: 'CVV no válido',
        });
    }
}

function success() {
    var nombre,correo,tarjeta,cvv,telefono;
    nombre = document.getElementById("nombre").value;
    correo = document.getElementById("correo").value;
    tarjeta = document.getElementById("tarjeta").value;
    cvv = document.getElementById("cvv").value;
    telefono = document.getElementById("telefono").value;

    if(nombre != "" || tarjeta  != "" || cvv  != "" || telefono  != ""){
        Swal.fire({
            title: '¡Listo!',
            text: "Tu producto ha sido agregado al carrito",
            icon: 'success'
        });
        return false;
    }
}