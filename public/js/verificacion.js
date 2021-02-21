$(document).ready(function (){
    $("#guardar").click(function (){
        var nombre = $("#nombre").val();
        var apellidopaterno = $("#paterno").val();
        var apellidomaterno = $("#materno").val();
        var correo=$("#correo").val();
        var pass1=$("#contrasenia-1").val();
        var pass2=$("#contrasenia-2").val();
        if (nombre=="" || nombre==null){
            alert("Ingresa el Nombre");
            $("#nombre").focus();
            return false;
        }
        if (apellidopaterno=="" || apellidopaterno==null){
            alert("Ingresa el Apellido Paterno");
            $("#apellido-paterno").focus();
            return false;
        }
        if (apellidomaterno=="" || apellidomaterno==null){
            alert("Ingresa el Apellido Materno");
            $("#apellido-Materno").focus();
            return false;
        }
        if($("#genero").val().trim()=="" || $("#genero").val().trim()==null){
            alert("Debe seleccionar un genero");
            return false;
        }
        if (correo=="" || correo==null){
            alert("Ingresa el correo");
            $("#correo").focus();
            return false;
        }
        if ((pass1=="" || pass1==null) || (pass2=="" || pass2==null)){
            alert("ingresa la contraseña");
            $("#password").focus();
            return false;
        }
        if (pass1 != pass2){
            alert("Las contraseñas no son iguales");
            $("#password").focus();
            return false;
        }
    });
    $("#guardar2").click(function () {
        var p1=$('input:radio[name=1]:checked').val();
        var p2=$('input:radio[name=2]:checked').val();
        var p3=$('input:radio[name=3]:checked').val();
        var p4=$('input:radio[name=4]:checked').val();
        var p5=$('input:radio[name=5]:checked').val();
        var p6=$('input:radio[name=6]:checked').val();
        var p7=$('input:radio[name=7]:checked').val();
        var p8=$('input:radio[name=8]:checked').val();
        var p9=$('input:radio[name=9]:checked').val();
        var p10=$('input:radio[name=10]:checked').val();
        if (p1 == "" || p1==null){
            alert("Responda la pregunta 1");
            return false;
        }
        if (p2 == "" || p2==null){
            alert("Responda la pregunta 2");
            return false;
        }
        if (p3 == "" || p3==null){
            alert("Responda la pregunta 3");
            return false;
        }
        if (p4 == "" || p4==null){
            alert("Responda la pregunta 4");
            return false;
        }
        if (p5 == "" || p5==null){
            alert("Responda la pregunta 5");
            return false;
        }
        if (p6 == "" || p6==null){
            alert("Responda la pregunta 6");
            return false;
        }
        if (p7 == "" || p7==null){
            alert("Responda la pregunta 7");
            return false;
        }
        if (p8 == "" || p8==null){
            alert("Responda la pregunta 8");
            return false;
        }
        if (p9 == "" || p9==null){
            alert("Responda la pregunta 9");
            return false;
        }
        if (p10 == "" || p10==null){
            alert("Responda la pregunta 10");
            return false;
        }
    });
});