$(document).ready(function(){
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
    $("#QuestionRegisterSubmit").click(function(event){
        event.preventDefault();
        $.post("../programs/registrar_pregunta.php",
        {
            subject: $("#subject").val(),
            question: $("#question").val(),
            c_Answer: $("#c_Answer").val(),
            i_Answer1: $("#i_Answer1").val(),
            i_Answer2: $("#i_Answer2").val(),
            i_Answer3: $("#i_Answer3").val(),
            q_Img: $("#q_Img").val()
        },
        function(data){
            alert(data);
        });
    });
});
