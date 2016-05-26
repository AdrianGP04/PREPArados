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
        $.post("../programs/obtener_materias.php",
        {
            colegio: $("#colegioPlan").val()
        },
        function(data){
            $("#materiaPlan").append(data);
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
});
