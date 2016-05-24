$(document).ready(function(){
    $(".help").mouseenter(function(){
        $(".password").attr("type", "text");
    });
    $(".help").mouseout(function(){
        $(".password").attr("type", "password");
    });
    $("#numCuentaLogIn").popover({title: "Número de cuenta incorrecto", content: "El número de cuenta ingresado es erróneo", placement: "right"});
    $("#passwordLogIn").popover({title: "Contraseña incorrecta", content: "La contraseña ingresada es errónea", placement: "right"});
    $("#modal-header-LogIn").popover({title: "Campos vacios", content: "Debes llenar todos los campos", placement: "right"});
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
            else if (data == "ERROR: CONTRASEÑA")
                $("#passwordLogIn").popover("toggle");
            else
                $("#logInForm").submit();
        });
    });
    $("input").focus(function(){
        $("#numCuentaLogIn").popover("hide");
        $("#passwordLogIn").popover("hide");
        $("#modal-header-LogIn").popover("hide");
    });
});
