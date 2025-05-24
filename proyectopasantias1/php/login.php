<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../login/login.css">
    <link rel="stylesheet" href="../login/icon.png">
</head>
<body>
    
    
        <div class="inicio">

            <?php include ("loginphp.php")?>

            <form method="post">

                <h1>Inicio de Sesión</h1>

                <div class="cajadetexto">

                    <input type="email" placeholder="Correo Electronico" name="email" id="email" required>

                    <img src="../login/mail.png" class="icono">

                    <span class="error"></span>

                </div>

                <div class="cajadetexto">

                    <input type="password" placeholder="Contraseña" name="contraseña" id="contraseña" required>

                    <img src="../login/cerrado.png" class="icono" id="ojo" style="cursor: pointer;">

                    <span class="error"></span>

                </div>

                <div class="recordarme-contraseña">

                    <label><input type="checkbox"> Recordarme</label>

                    <a href="">Olvide mi Contraseña</a>

                </div>


                <div class="boton">

                    <button type="submit" class="btn btn-dark" name="iniciarsesion">Iniciar Sesión</button>

                </div>
                

                <div class="registrarse">

                    <p>No tienes una Cuenta? <a href="../php/register.php" style="padding-left: 10px;">Crear una Cuenta</a></p>

                </div>

            </form>

        </div>

        <script>

            // ----- Ver y ocultar la contraseña

            let ojo = document.getElementById("ojo");
            let contraseña = document.getElementById("contraseña");

            ojo.onclick = function(){

                if(contraseña.type == "password"){
                    contraseña.type = "text";
                    ojo.src = "../login/abierto.png";
                }

                else{
                    contraseña.type = "password";
                    ojo.src = "../login/cerrado.png";
                }

            }

        </script>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</html>