<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form methood="post">

            <h2>FORMULARIO DE VATACIÓN</h2>
            

            <div class="input-warpper">
                <label for="iname">Nombre y Apellido</label>
                <input id= "iname" size="26px" type="text" name="name" placeholder="">
                
            </div>
            <div class="input-warpper">
                <label for="ialias">Alais</label>
                <input id= "ialias" size="26px" type="text" name="Alias" placeholder="">
                
            </div>
            </div>
            <div class="input-warpper">
                <label for="irut">Rut</label>
                <input id= "irut"  size="26px" type="rut" name="rut" placeholder="">
                
            </div>
            <div class="input-warpper">
                <label for="iemail">email</label>
                <input id= "iemail" size="26px" type="email" name="email" placeholder="">
                
            </div>
            <div class="input-warpper">
                <label for="iregion">Región</label>
                <select  name="region" id="iregion">
                                <option value="text"></option>
                                <option value="text">Antofagasta</option>
                                <option value="text">Region Metropolitana</option>
                </select>
           <div>
                
            </div>

            <div class="input-warpper">
                <label for="icomuna">Comuna</label>
                <select  name="comuna" id="icomuna">
                                <option value="text"></option>
                                <option value="text">Antofagasta</option>
                                <option value="text">Region Metropolitana</option>
                </select>
           <div>

            <div class="input-warpper">
                <label for="icandidato">Candidato</label>
                <select  name="candidato" id="icandidato">
                                <option value="text"></option>
                                <option value="text">Antofagasta</option>
                                <option value="text">Region Metropolitana</option>
                </select>
           <div>
                
            </div>
            <div class="input-warpper">
                <label for="inosotros" class="input-warper-box">Como se entero de Nosotros</label>
                <input  name="nosotros" class="check-box"  type="checkbox" id="nosotros" require>
                <label for="inosotros" class="input-warper-box">Web</label>

                <input  name="nosotros" class="check-box" type="checkbox" id="nosotros" require>
                <label for="inosotros" class="input-warper-box">Tv</label>

                <input  name="nosotros" class="check-box" type="checkbox" id="check3" require>
                <label for="check3" class="input-warper-box">Redes sociales</label>
        
                <input  name="nosotros" class="check-box" type="checkbox" id="inosotros" require>
                <label for="inosotros" class="input-warper-box">Amigo</label>
            </div>
            <div class="buton">
            <input type="submit" name="registro" value="votar">
            </div>


    <?php
    include("registrar.php")
?>


    </form>
</body>
</html>