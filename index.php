<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Hoja de estilos CSS -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        
        
        
    </head>
    <body>
        
        <h1>Salud & Vida</h1>
        
        <div id="form-principal">

            <form action="" method="post">

                <label for="imc">Calcula tu IMC (Indice de masa corporal)</label>
                <input type="radio" id="imc" name="fitness" value="calcula tu IMC">

                <label for="calorias">Contador de calorías (Informate de lo que comes)</label>
                <input type="radio" id="calorias" name="fitness" value="contador de calorias">

                <label for="ejercicio">Iniciar Sesión / Registro</label>
                <input type="radio" id="ejercicio" name="fitness" value="deporte">

            </form>
            
        </div>
        
        <div id="calcular-imc" class="ocultar">
            
            <form action="imc.php" method="post">

                <h1>Calcula tu IMC (índice de masa corporal)</h1>

                <label>Introduzca su altura (cm):  </label>
                <input type="text" name="altura"><br>
                <label>Introduzca su edad: </label>
                <input type="text" name="edad"><br>
                <label>Introduzca su peso (kg): </label>
                <input type="text" name="peso"><br>
                <label>Seleccione su sexo: </label>
                <select name="sexo">
                  <option value="mujer">Mujer</option>
                  <option value="hombre">Hombre</option>
                  <option value="otro">Otro</option>
                </select><br><br>
                <input type="submit" name="resultado" value="Ver resultados">

            </form>
            
        </div>
        
        <div id="contador-calorias" class="ocultar">
                                   
            <form action="" method="POST">
                
                <h1>Contador de calorias</h1>
            
                <label>Buscar alimento: </label>
                <input type="search" name="buscaralimento">
                <input type="submit" name="buscar" value="Buscar">
            
            </form>        
            
        </div>
        
        <div id="iniciar-sesion" class="">
                                   
            <form action="" method="POST">
                
                <h1>Registro o inicio de sesión</h1>
            
                <label>Buscar alimento: </label>
                <input type="search" name="buscaralimento">
                <input type="submit" name="buscar" value="Buscar">
            
            </form>        
            
        </div>
        
        <a href="">Inicio</a>
        
        <!-- script -->
        
        
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        
        <!-- ***************************************** -->
                                               
        <?php
        // put your code here
        ?>
        
        
        
    </body>
</html>
