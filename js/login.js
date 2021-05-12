$('#formLogin').submit(function(e) {
    e.preventDefault();
    var usuario = $.trim($("#login").val());
    var password = $.trim($("#password").val());
    //alert(usuario);

    if (usuario.length == "" || password.length == "") {
        Swal.fire({

            icon: 'warning',
            title: 'Debe ingresar un Usuario y/o Password',


        });
        return false;
    } else {
        $.ajax({
            url: "bd/login.php",
            type: "POST",
            dataType: "json",
            data: { usuario: usuario, password: password },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        icon: "error",
                        title: "usuario y/o password incorrectos",
                    });
                } else {
                    Swal.fire({
                        icon: "succes",
                        title: "!Conexion exitosa¡",
                        confirmButtonText: "Ingresar"
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "vistas/pagina_inicio.php";
                        }
                    })

                }
            }
        });


    }

});