$.post("../programs/check_estudiante.php",function(data){
    if(data == "Error")
        window.location.replace("../");
    else
        $("#saludo").html(data);
    $(document).ajaxError(function(){
        $("#modalErrorServidor").modal("show");
    });
});
