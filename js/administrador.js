$.post("../programs/check_admin.php",function(data){
    if(data == "Error")
    window.location.replace("../");
    else
    $("#saludo").html(data);
});
$(document).ready(function(){
    /* JavaScript del administrador */

    $.post("../programs/actualizar_datos.php");
    /* Sistema para mostrar la contraseña al hacer hover en el span clase "help" */
    $(".help").mouseenter(function(){
        $(".password").attr("type", "text");
    });
    $(".help").mouseout(function(){
        $(".password").attr("type", "password");
    });
    /* Asignación de popovers de error */
    $("#coordRegister").popover({title: "Coordinador registrado", content: "El coordinador ingresado ya ha sido registrado", placement: "right"});
    $("#passwordCoordRegister").popover({title: "Contraseñas diferentes", content: "Las contraseñas deben ser iguales", placement: "right"});
    $("#passwordCoordRegister2").popover({title: "Campos vacios", content: "Debes llenar todos los campos", placement: "right"});
    $("#ConsultaUsuario").popover({title: "Campos vacios", content: "Debes llenar todos los campos", placement: "right"});

    /* Sistema para ocultar los popover al seleccionar cualquier input */
    $("input").focus(function(){
        $("#coordRegister").popover("hide");
        $("#passwordCoordRegister").popover("hide");
        $("#passwordCoordRegister2").popover("hide");
        $("#ConsultaUsuario").popover("hide");
        $("input").keypress(function(){
            $("#posibles").popover("hide");
        });
    });

/* Sistema de registro de coordinadores*/
    /* Sistema para obtener los colegios del área seleccionada por el administrador*/
    $("#areaCoord").mouseup(function(){
        $(".col").remove(); /* Remueve los colegios del area seleccionada anteriormente */
        $.post("../programs/obtener_colegios.php",
        {
            area: $(this).val() /* Area seleccionada */
        },
        function(data){
            $("#colegioCoord").append(data); /* Agrega los colegios del area seleccionada */
        });
    });
    /* Sistema de registro al hacer submit */
    $("#CoordRegisterSubmit").click(function(event){
        event.preventDefault();
        $.post("../programs/registro_coordinador.php",
        {
            coordRegister: $("#coordRegister").val(),
            areaCoord: $("#areaCoord").val(),
            colegioCoord: $("#colegioCoord").val(),
            passwordCoordRegister: $("#passwordCoordRegister").val(),
            passwordCoordRegister2: $("#passwordCoordRegister2").val()
        },
        function(data){
            if(data == "ERROR: CAMPOS") /* Error por campos vacios */
                $("#passwordCoordRegister2").popover("show");
            else if (data == "ERROR: REGISTRADO") /* Error por la existencia del coordinador ingresado */
                $("#coordRegister").popover("show");
            else if (data == "ERROR: CONTRASEÑA") /* Error por discordancia en las contraseñas */
                $("#passwordCoordRegister").popover("show");
            else{
                $("#RegisterForm").submit(); /* Se envia el formulario */
                $("#modalRegCoord").modal("show"); /* Se muestra el mensaje de confirmacion */
                $("#coordRegister").val(""); /* Se eliminan  los campos de los inputs */
                $("#areaCoord").val("");
                $("#colegioCoord").val("");
                $("#passwordCoordRegister").val("");
                $("#passwordCoordRegister2").val("");
            }
        });
    });
/* Sistema de consuta de usuarios del sitio */
    $("#ConsultaUsuarioSubmit").click(function(event){
        $(".tab-result").remove(); /* Remueve las consultas anteriores */
        event.preventDefault();
        var consulta = $("#ConsultaUsuario").val();
        $.post("../programs/consulta_usuarios.php",
        {
            ConsultaUsuario: consulta
        },
        function(data){
            if(data == "ERROR: CAMPOS")
                $("#ConsultaUsuario").popover("show"); /* Error por campos vacios */
            else if (data == "ERROR: 404"){
                $("#posibles").popover("destroy");
                $.post("../programs/consulta_usuarios_error.php",
                {
                    ConsultaUsuario: consulta.slice(0,5)
                },
                function(data){
                    $("#posibles").popover({title: "Resultados posibles", content: data, placement: "right"});
                    $("#posibles").popover("toggle");
                });
            }
            else{
                $("#ConsultaResult").append(data);
            }
            $(".EliminarLink").bind("click",function(){ /* Asignacion del modal de eliminacion a la nueva consulta */
            $("#EliminarModal").modal();
            });
        });
    });
/* Sistema de eliminacion de usuarios */
    $("#EliminarUsuario").click(function(){
        $.post("../programs/eliminar_usuarios.php",
        {
            EliminarUsuario: $("#ConsultaUsuario").val(),
            TipoUsuario: $("thead").attr("id")
        },
        function(data){
            if(data == "SUCCESS"){ /* En caso de éxito */
                $(".tab-result").remove(); /* Se borra el resultado de la busqueda */
                $("#EliminarModal").modal("toggle"); /* Se oculta el modal de eliminacion */
                $("#modalDelUser").modal("show"); /* Se muestra el mensaje de confirmacion */
            }
            else if(data == "ERROR: CAMPOS"){
                $("#ConsultaUsuario").popover("show"); /* Error por campos vacios */
            }
        });
    });
    $(document).ajaxError(function(){
        $("#modalErrorServidor").modal("show");
    });
});
