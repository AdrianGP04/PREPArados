$(document).ready(function(){
    $(".help").mouseenter(function(){
        $(".password").attr("type", "text");
    });
    $(".help").mouseout(function(){
        $(".password").attr("type", "password");
    });
    $("#coordRegister").popover({title: "Coordinador registrado", content: "El coordinador ingresado ya ha sido registrado", placement: "right"});
    $("#passwordCoordRegister").popover({title: "Contraseñas diferentes", content: "Las contraseñas deben ser iguales", placement: "right"});
    $("#passwordCoordRegister2").popover({title: "Campos vacios", content: "Debes llenar todos los campos", placement: "right"});
    $("input").focus(function(){
        $("#coordRegister").popover("hide");
        $("#passwordCoordRegister").popover("hide");
        $("#passwordCoordRegister2").popover("hide");
    });
    $("#areaCoord").mouseup(function(){
        $(".col").remove();
        $.post("../programs/obtener_colegios.php",
        {
            area: $(this).val()
        },
        function(data){
            $("#colegioCoord").append(data);
        });
    });
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
            if(data == "ERROR: CAMPOS")
                $("#passwordCoordRegister2").popover("show");
            else if (data == "ERROR: REGISTRADO")
                $("#coordRegister").popover("show");
            else if (data == "ERROR: CONTRASEÑA")
                $("#passwordCoordRegister").popover("show");
            else{
                $("#RegisterForm").submit();
                window.location.href = "";
            }
        });
    });
});
