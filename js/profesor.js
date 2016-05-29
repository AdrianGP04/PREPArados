$.post("../programs/check_profesor.php",function(data){
    if(data == "Error")
        window.location.replace("../");
    else
        $("#saludo").html(data);
});
$(document).ready(function(){
    $.post("../programs/obtener_materias.php",
    {
        sesion: true
    },
    function(data){
        $("#subjectPregunta").append(data);
    });
    $.post("../programs/obtener_preguntas.php",
    {
        badge: true,
        profesor: true
    },
    function(data){
        $(".badge").html(data);
    });
    $.post("../programs/obtener_materias.php",
    {
        sesion: true
    },
    function(data){
        $("#subject").append(data);
    });

    $("#colegioPlan").mouseup(function(){
        $(".mat").remove();
        $(".tab-result").remove();
        $.post("../programs/obtener_materias.php",
        {
            colegio: $("#colegioPlan").val()
        },
        function(data){
            if(data != "NO SUBJECTS"){
                $("#materiaPlan").append(data);
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
    $("#materiaPlan").mouseup(function(){
        $(".tab-result").remove();
        $.post("../programs/obtener_plan.php",
        {
            materia: $("#materiaPlan").val()
        },
        function(data){
            $("#PlanResult").append(data);
        });
    });
    $("#QuestionRegisterSubmit").popover({title: "Campos vacios", content: "Debes llenar todos los campos", placement: "right"});
    $("#QuestionRegisterSubmit").click(function(event){
        event.preventDefault();
        $.post("../programs/registrar_pregunta.php",
        {
            subject: $("#subject").val(),
            question: $("#question").val(),
            c_Answer: $("#c_Answer").val(),
            i_Answer1: $("#i_Answer1").val(),
            i_Answer2: $("#i_Answer2").val(),
            i_Answer3: $("#i_Answer3").val()
        },
        function(data){
            if(data == "ERROR: CAMPOS"){
                $("#QuestionRegisterSubmit").popover("show");
            }
            else{
                $("#RegisterFormPregunta").submit();
                window.location.href = "";
            }
        });
    });
    $("#subjectPregunta").mouseup(function(){
        $(".tab-result").remove();
        $.post("../programs/obtener_preguntas.php",
        {
            materia: $(this).val(),
            profesor: true
        },
        function(data){
            $("#preguntaResultProf").append(data);
            $('[data-toggle="tooltip"]').tooltip();
            $(".delete").click(function(){
                pregunta_id = $(this).attr("id"); //global
                pregunta_id = pregunta_id.slice(3);
            });
            $(".modify").click(function(){
                pregunta_id = $(this).attr("id"); //global
                pregunta_id = pregunta_id.slice(3);
            });
        });
    });
    $("#EliminarConfirm").click(function(){
        $.post("../programs/eliminar_pregunta.php",
        {
            pregunta: pregunta_id
        },
        function(data){
            if(data == "SUCCESS"){
                $(".tab-result").remove();
                $("#preguntaDelete").modal("toggle");
            }
            else {
                alert("error");
            }
        });
    });

    $("input").focus(function(){
        $("#QuestionRegisterSubmit").popover("hide");
    });
});
$("#QuestionModSubmit").click(function(event){
    event.preventDefault();
    $.post("../programs/modificar_pregunta.php",
    {
        pregunta: pregunta_id,
        questionMod: $("#questionMod").val(),
        c_AnswerMod: $("#c_AnswerMod").val(),
        i_Answer1Mod: $("#i_Answer1Mod").val(),
        i_Answer2Mod: $("#i_Answer2Mod").val(),
        i_Answer3Mod: $("#i_Answer3Mod").val()

    },
    function(data){
        $(".tab-result").remove();
        $("#ModFormPregunta").modal("hide");
        $.post("../programs/obtener_preguntas.php",
        {
            badge: true,
            profesor: true
        },
        function(data){
            $(".badge").html(data);
        });
    });
});
