$(document).ready(function(){
    $(".help").mouseenter(function(){
        $(".password").attr("type", "text");
    });
    $(".help").mouseout(function(){
        $(".password").attr("type", "password");
    });

    $("#coordRegister").popover({title: "Número de cuenta registrado", content: "El número de cuenta ingresado ya ha sido registrado", placement: "right"});
    $("#passwordCoordRegister").popover({title: "Contraseñas diferentes", content: "Las contraseñas deben ser iguales", placement: "right"});
    $("#passwordCoordRegister2").popover({title: "Campos vacios", content: "Debes llenar todos los campos", placement: "right"});
    $("#coordRegister").popover("show");
    $("#passwordCoordRegister").popover("show");
    $("#passwordCoordRegister2").popover("show");

});
