<?php

    define('servidor','localhost');
    define('usuario','root');
    define('contraseña','');
    define('bdd','proyectopasantias');

    $conexion = mysqli_connect(servidor,usuario,contraseña,bdd);

    if($conexion === false){
        die("ERROR EN LA CONEXÍON " . mysqli_connect_error());
    }

    /*

    Para corroborar la conexion

    else{
        echo 'CONEXION EXITOSA';
    }
    
    */

?>