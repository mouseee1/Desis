<?php

include("conexion.php");

    if (isset($_POST['registrar'])) {
        if(
            strlen($_POST['name']) >=1 &&
            strlen($_POST['alias']) >=1 &&
            strlen($_POST['rut']) >=1 &&
            strlen($_POST['email']) >=1 &&
            strlen($_POST['region']) >=1 &&
            strlen($_POST['comuna']) >=1 &&
            strlen($_POST['candidato']) >=1 &&
            strlen($_POST['nosotros']) >=1 
        ){
            $name =trim($_POST['name']);
            $alias =trim($_POST['alias']);
            $rut =trim($_POST['rut']);
            $email =trim($_POST['email']);
            $region =trim($_POST['region']);
            $comuna =trim($_POST['comuna']);
            $candidato =trim($_POST['candidato']);
            $nosotros =trim($_POST['nosotros']);
            $name =date("d/m/y");
            $consulta = "INSERT TO datos(nombre,alias,rut,email,region,comuna,candidato,nostros,fecha)
                        VALUES ('$name','$alias','$rut','$email','$region','$comuna','$candidato','$nosotros','$fecha')";
                        $resultado = mysqli_query($conex,$consulta);
                        if ($resultado){
                            ?>
                            <h3 class="success" >Tu Votacion Se ha Enviado </h3>
                            <?php
                        }else{
                            ?>
                        <h3 class="error"> Ocurrio un Error</h3>
                        <?php
                        }
                    }else{
                        ?>
                        <h3 class="error"> Llena Todos los campos</h3>
                        <?php
                } 
            
            } 
?>








































function GrabarDatos() {
    var nombres = $('#nombres').attr('value');
    var ciudad = $('#ciudad').attr('value');
    var alternativas = $("input[@name='alternativas']:checked").attr("value");
    var telefono = $("#telefono").attr("value");
    var fecha_nacimiento = $("#fecha_nacimiento").attr("value");
    $.ajax({
        url: 'nuevo.php',
        type: "POST",
        data: "submit=&nombres=" + nombres + "&ciudad=" + ciudad + "&alternativas=" + alternativas + "&telefono=" + telefono + "&fecha_nacimiento=" + fecha_nacimiento,
        success: function (datos) {
            ConsultaDatos();
            alert(datos);
            $("#formulario").hide();
            $("#tabla").show();
        }
    });
    return false;
}
//esta funcion es para el boton cancelar del form 
function Cancelar() {
    $("#formulario").hide();
    $("#tabla").show();
    return false;
}