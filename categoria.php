<?php
    session_start();
    if(!empty($_SESSION['administrador']) or !empty($_SESSION['usuario'])){
    }else{
        die("<center><br>
        <h1 style='color: limegreen;'>Error: No has iniciado sesión todavía...! </h1>
        <br>
        <h2 style='color: lime;'>Vamos a la pagina de inicio de sesión.</h2>
        <br>
        <a href='./inicio_sesion.php.php'>
        <button style='background-color: lime;border-radius: 20px; width: 80px; height: 30px'>Login</button>
        </a>
        </center>");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FerreWeb</title>
    <link rel="icon" type="image/x-icon" href="Logo_Ferreweb.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
        img{
            height: 60px;
            width: 80px;
        }
        #nombre{
            padding-right: 20px;
        }
        .Logo{
            display: flex;
            margin-left: 2%;
            color: white;
            align-items: center;
        }
        body{
            position: relative;
            padding-bottom: 3em;
            min-height: 100vh;
            width: 100%;
            height: 100%;
        }
        .opciones{
            margin-left: 10px;
        }
        form{
            margin: 15px;
        }                    
    </style>
</head>
<body><?php 
include "header_admin.php"
?>
    <div class="container-fluit">
        <div class="row">
        <?php include "menu.php" ?>
            <div class="col-9">
               <form action="agregar_categoria.php" method="post">
                    <label for="categoria">Categoria</label>
                    <input class="form-control" type="text" name="categoria" placeholder="Nueva Categoria" aria-label="default input example">
                    <br>
                    <button type="submit" class="btn btn-warning">Agregar</button>
                </form> 
            </div>
        </div>
    </div>
<?php include "./footer.php"
?>      
</body>
</html>







    