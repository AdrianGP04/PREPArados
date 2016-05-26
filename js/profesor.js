$(document).ready(function(){
        $.post("../programs/obtener_materias.php",
        function(data){
            $("#subject").append(data);
        });

});
