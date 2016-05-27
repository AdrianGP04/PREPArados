$(document).ready(function(){
    $(".help").mouseenter(function(){
        $(".password").attr("type", "text");
    });
    $(".help").mouseout(function(){
        $(".password").attr("type", "password");
    });
    $("#profRegister").popover({title: "Coordinador registrado", content: "El coordinador ingresado ya ha sido registrado", placement: "right"});
    $("#passwordProfRegister").popover({title: "Contraseñas diferentes", content: "Las contraseñas deben ser iguales", placement: "right"});
    $("#passwordProfRegister2").popover({title: "Campos vacios", content: "Debes llenar todos los campos", placement: "right"});
    $("input").focus(function(){
        $("#profRegister").popover("hide");
        $("#passwordProfRegister").popover("hide");
        $("#passwordProfRegister2").popover("hide");
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
    $("#ProfRegisterSubmit").click(function(event){
        event.preventDefault();
        $.post("../programs/registro_profesor.php",
        {
            profRegister: $("#profRegister").val(),
            areaCoord: $("#areaCoord").val(),
            colegioCoord: $("#colegioCoord").val(),
            passwordProfRegister: $("#passwordProfRegister").val(),
            passwordProfRegister2: $("#passwordProfRegister2").val()
        },
        function(data){
            if(data == "ERROR: CAMPOS")
                $("#passwordProfRegister2").popover("show");
            else if (data == "ERROR: REGISTRADO")
                $("#profRegister").popover("show");
            else if (data == "ERROR: CONTRASEÑA")
                $("#passwordProfRegister").popover("show");
            else{
                $("#RegisterForm").submit();
                window.location.href = "";
            }
        });
    });
    $("#approveArea").mouseup(function(){
        $(".col").remove();
        $.post("../programs/obtener_colegios.php",
        {
            area: $(this).val()
        },
        function(data){
            $("#approveColegio").append(data);
        });
    });
    $("#approveColegio").mouseup(function(){
        $(".mat").remove();
        $(".tab-result").remove();
        $.post("../programs/obtener_materias.php",
        {
            colegio: $(this).val(),
            aprobar: true
        },
        function(data){
            if(data != "NO SUBJECTS"){
                $("#approveMateria").append(data);
                $("#materiaPlan").removeAttr("disabled");
                $("#materiaPlan").popover("hide");
                $("#materiaPlan").focus(function(){
                    $("#materiaPlan").popover("hide");
                });
            }
            else{
                $("#materiaPlan").attr("disabled","on");
                $("#materiaPlan").popover({title: "Sin resultados", content: "No se han encontrado materias", placement: "right"});
                $("#materiaPlan").popover("show");
            }
        });
    });
});
