$(document).ready(function(){
    $.post("../programs/obtener_preguntas.php",
    {
        badge: true,
        coordinador: true,
        profesor: true
    },
    function(data){
        $(".badge").html(data);
    });
/* Mostrar contraseñas al hacer hover sobre el span*/
    $(".help").mouseenter(function(){
        $(".password").attr("type", "text");
    });
    $(".help").mouseout(function(){
        $(".password").attr("type", "password");
    });
/* Asignación de popovers de errr */
    $("#profRegister").popover({title: "Coordinador registrado", content: "El coordinador ingresado ya ha sido registrado", placement: "right"});
    $("#passwordProfRegister").popover({title: "Contraseñas diferentes", content: "Las contraseñas deben ser iguales", placement: "right"});
    $("#passwordProfRegister2").popover({title: "Campos vacios", content: "Debes llenar todos los campos", placement: "right"});
    /* Ocultar popovers al hacer focus en cualquier input*/
    $("input").focus(function(){
        $("#profRegister").popover("hide");
        $("#passwordProfRegister").popover("hide");
        $("#passwordProfRegister2").popover("hide");
    });
    /* Obtener colegios por el area seleccionada */
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
/* Sistema de registro de profesores */
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
                $("#passwordProfRegister2").popover("show"); /* En caso de haber campos vacios */
            else if (data == "ERROR: REGISTRADO")
                $("#profRegister").popover("show"); /* En caso de que el profesor ya haya sido registrado */
            else if (data == "ERROR: CONTRASEÑA")
                $("#passwordProfRegister").popover("show"); /* En caso de que las contrasñeas no coincidan */
            else{
                $("#RegisterForm").submit();
                window.location.href = "";
            }
        });
    });
/* Ocultar selects de forma predeterminada (para evitar errores de campos vacios) */
    $("#approveColegio").attr("disabled","on");
    $("#approveMateria").attr("disabled","on");

    $("#approveArea").mouseup(function(){
        $(".col").remove(); /* Remover consultas anteriores */
        $("#approveColegio").removeAttr("disabled"); /* Habilita el input de colegios */
        $.post("../programs/obtener_colegios.php",
        {
            area: $(this).val()
        },
        function(data){
            $("#approveColegio").append(data); /* Integrar nueva consulta */
        });
    });
    $("#approveColegio").mouseup(function(){
        $("#approveMateria").removeAttr("disabled"); /* Habilita el input de materias */
        $(".mat").remove(); /* Remueve la consulta anterior */
        $(".tab-result").remove(); /* Remueve la consulta anterior */
        $.post("../programs/obtener_materias.php",
        {
            colegio: $(this).val(),
            aprobar: true
        },
        function(data){
            if(data != "NO SUBJECTS"){ /* En caso de encontrar materias*/
                $("#approveMateria").append(data);
                $("#approveMateria").removeAttr("disabled");
                $("#approveMateria").popover("hide");
                $("#approveMateria").focus(function(){
                    $(this).popover("hide");
                });
            }
            else{ /* En caso de que no se hayan encontrado materias del colegio */
                $("#approveMateria").attr("disabled","on");
                $("#approveMateria").popover({title: "Sin resultados", content: "No se han encontrado materias", placement: "right"});
                $("#approveMateria").popover("show");
            }
        });
    });
    $("#approveMateria").mouseup(function(){
        $(".tab-result").remove(); /* Se remueve la consulta s*/
        $.post("../programs/obtener_preguntas.php",
        {
            materia: $(this).val()
        },
        function(data){
            $("#preguntaResult").append(data); /* Se muestra la consulta */
            $('[data-toggle="tooltip"]').tooltip(); /* Se habilitan los tooltips */
            $(".no-approve").click(function(){
                $(".tab-result").remove(); /* Se elimina la consulta */
                var pregunta_id = $(this).attr("id");
                pregunta_id = pregunta_id.slice(3);
                $.post("../programs/aprobar_pregunta.php",
                {
                    id: pregunta_id
                },
                function(data){
                    $("#modalApprove").modal("show"); /* Se muestra el modal de confirmacion */
                    $.post("../programs/obtener_preguntas.php",
                    {
                        badge: true,
                        coordinador: true,
                        profesor: true
                    },
                    function(data){
                        $(".badge").html(data);
                    });
                });
            });
            $(".rev").click(function(){
                $(".tab-result").remove(); /* Se elimina la consulta */
                var pregunta_id = $(this).attr("id");
                pregunta_id = pregunta_id.slice(3);
                $.post("../programs/revisar_pregunta.php",
                {
                    id: pregunta_id
                },
                function(data){
                    $("#modalRegCoord").modal("show"); /* Se mutesra el modal de confirmacion de revision de pregunta */
                });
            });
        });
    });
});
