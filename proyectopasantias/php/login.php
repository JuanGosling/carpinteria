<?php

    require 'conexion.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['iniciarsesion'])){

        $email = $_POST['email'] ;
        $contraseña = $_POST['contraseña']; 

    }

    $sql = "SELECT * FROM usuario WHERE Email = '$email' and Contraseña = '$contraseña'";

    $resultado = mysqli_query($conexion,$sql);

    $numero_registros = mysqli_num_rows($resultado);

    if($numero_registros != 0){
        echo "Inicio de sesión exitoso.";
    }
    else{
        echo "El Email y/o Contraseña son incorrectos , Por favor Verificalos";
    }

?>