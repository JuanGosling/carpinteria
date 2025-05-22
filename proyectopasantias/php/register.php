<?php

    require 'conexion.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" ){

        $email = trim($_POST['email']);
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $contraseña = trim($_POST['contraseña']); 

    }

    $sql = "INSERT INTO usuario (ID_Usuario,Email,Nombre,Apellido,Contraseña) VALUES(null,'$email','$nombre','$apellido','$contraseña')";

    $resultado = mysqli_query($conexion,$sql);

    if($resultado){
        echo  "Datos ingresados correctamente";
    }
    else{
        echo  "Error : " . $sql . "<br>" . mysqli_error($conexion);
    }

?>