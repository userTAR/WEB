
    document.getElementById("nombre").focus();

    function validacion() {
        var check = true;
        var celNumber = document.getElementById("telefono").value;
        if(celNumber.length > 12){
            alert("El numero de celular tiene más de 10 dígitos");
            check = false;
        }
        return check;
    }