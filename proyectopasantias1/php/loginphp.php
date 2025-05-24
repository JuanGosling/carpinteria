<?php

    require 'conexion.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['iniciarsesion'])){

        if(
            strlen($_POST['email']) >=1 &&
            strlen($_POST['contraseña']) >=1
        ) {

        $email = $_POST['email'] ;
        $contraseña = $_POST['contraseña'];

        $consulta = "SELECT * FROM usuario WHERE Email = '$email' and Contraseña = '$contraseña'";

        $resultado = mysqli_query($conexion,$consulta);

        $numero_registros = mysqli_num_rows($resultado);

        if($numero_registros != 0){
            ?>
            <div class="alert alert-success" role="alert" style="text-align:center">Inicio de Sesión Exitoso!</div>
            <?php
        }
        else{
            ?>
            <div class="alert alert-danger" role="alert" style="text-align:center">El Email y/o Contraseña son incorrectos</div>
            <?php
        }

        }
        
        else{
        ?>
            <div class="alert alert-danger" role="alert" style="text-align:center">Porfavor llena todos los campos solicitados.</div>
        <?php
        }

    }

    

?>