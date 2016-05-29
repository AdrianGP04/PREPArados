$(document).ready(function(){
    $.post("./programs/registro_visita.php");
    $(".help").mouseenter(function(){
        $(".password").attr("type", "text");
    });
    $(".help").mouseout(function(){
        $(".password").attr("type", "password");
    });
    $("#numCuentaLogIn").popover({title: "Identifiación incorrecta", content: "El indentificador de cuenta ingresado es erróneo", placement: "right"});
    $("#numCuentaLogIn").tooltip({title: "En caso de otro tipo de cuenta, ingrese su nombre", placement: "right"});
    $("#passwordLogIn").popover({title: "Contraseña incorrecta", content: "La contraseña ingresada es errónea", placement: "right"});
    $("#modal-header-LogIn").popover({title: "Campos vacios", content: "Debes llenar todos los campos", placement: "right"});

    $("#numCuentaRegister").popover({title: "Número de cuenta registrado", content: "El número de cuenta ingresado ya ha sido registrado", placement: "right"});
    $("#passwordRegister").popover({title: "Contraseñas diferentes", content: "Las contraseñas deben ser iguales", placement: "right"});
    $("#modal-header-Register").popover({title: "Campos vacios", content: "Debes llenar todos los campos", placement: "right"});

    $("#logInSubmit").click(function(event){
        event.preventDefault();
        $.post("./programs/login.php",
        {
            numCuentaLogIn: $("#numCuentaLogIn").val(),
            passwordLogIn: $("#passwordLogIn").val()
        },
        function(data){
            if(data == "ERROR: CAMPOS")
                $("#modal-header-LogIn").popover("toggle");
            else if (data == "ERROR: REGISTRO")
                $("#numCuentaLogIn").popover("toggle");
            else if (data == "ERROR: ALUMNO" || data == "ERROR: ADMIN" || data == "ERROR: COORD" || data == "ERROR: PROF")
                $("#passwordLogIn").popover("toggle");
            else
                $("#logInForm").submit();
        });
    });
    $("#RegisterSubmit").click(function(event){
        event.preventDefault();
        $.post("./programs/registro.php",
        {
            userRegister: $("#userRegister").val(),
            numCuentaRegister: $("#numCuentaRegister").val(),
            passwordRegister: $("#passwordRegister").val(),
            passwordRegister2:$("#passwordRegister2").val()
        },
        function(data){
            if(data == "ERROR: CAMPOS")
                $("#modal-header-Register").popover("show");
            else if (data == "ERROR: REGISTRADO")
                $("#numCuentaRegister").popover("show");
            else if (data == "ERROR: CONTRASEÑA")
                $("#passwordRegister").popover("show");
            else{
                $("#RegisterForm").submit();
                window.location.href = "index.html";
            }
        });
    });

    $("input").focus(function(){
        $("#numCuentaLogIn").popover("hide");
        $("#passwordLogIn").popover("hide");
        $("#modal-header-LogIn").popover("hide");
        $("#numCuentaRegister").popover("hide");
        $("#passwordRegister").popover("hide");
        $("#modal-header-Register").popover("hide");
    });
});
