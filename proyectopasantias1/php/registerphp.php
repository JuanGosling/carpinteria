<?php

    include ("conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registrar'])){

        if(
            strlen($_POST['email']) >=1 &&
            strlen($_POST['nombre']) >=1 &&
            strlen($_POST['apellido']) >=1 &&
            strlen($_POST['contraseña'])>=1
        ) {

        $email = trim($_POST['email']);
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $contraseña = trim($_POST['contraseña']); 

        $consulta = "INSERT INTO usuario (ID_Usuario,Email,Nombre,Apellido,Contraseña) VALUES(null,'$email','$nombre','$apellido','$contraseña')";

        $resultado = mysqli_query($conexion,$consulta);

        if($resultado){

            ?>
            <div class="alert alert-success" role="alert" style="text-align:center">Datos Ingresados Correctamente!</div>
            <?php

        }

        else{

            ?>
            <div class="alert alert-danger" role="alert" style="text-align:center">Ups! Ocurrio un Error . Intente denuevo mas tarde</div>
            <?php
    
        }

        }

        else {

            ?>
            <div class="alert alert-danger" role="alert" style="text-align:center">Porfavor llena todos los campos solicitados.</div>
            <?php

        }

    }   

?>