$(document).ready(function (){
    $("#file-input").click(function (){
    var imagen=$("#mostrar").val();
        $("#mostrar").css("display","block");
    });
    $("#Eliminar").click(function (){
        var eli=confirm("Estas Seguro de Elimiar la cuenta");
        if(eli==true){
            return true;
        }else{
            return false;
        }
    });
});
