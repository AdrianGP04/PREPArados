$(document).ready(function(){
    $("#logInSubmit").click(function(event){
        $("#numCuentaLogIn").popover({title: "Número de cuenta incorrecto", content: "El número de cuenta ingresado es erróneo", placement: "right"});
        $("#passwordLogIn").popover({title: "Contraseña incorrecta", content: "La contraseña ingresada es errónea", placement: "right"});
        $("#modal-header").popover({title: "Campos vacios", content: "Debes llenar todos los campos", placement: "right"});
        event.preventDefault();
        $.post("./programs/login.php",
        {
            numCuentaLogIn: $("#numCuentaLogIn").val(),
            passwordLogIn: $("#passwordLogIn").val()
        },
        function(data){
            if(data == "ERROR: CAMPOS")
            $("#modal-header").popover("toggle");
            else if (data == "ERROR: REGISTRO")
                $("#numCuentaLogIn").popover("toggle");
            else if (data == "ERROR: CONTRASEÑA")
                $("#passwordLogIn").popover("toggle");
        });
    });
    $("input").focus(function(){
        $("#numCuentaLogIn").popover("hide");
        $("#passwordLogIn").popover("hide");
        $("#modal-header").popover("hide");
    });
});
