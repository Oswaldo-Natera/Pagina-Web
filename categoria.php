<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FerreWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        header{
            background-color: #F39C12;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            padding-bottom: 20px;
        }
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
        footer{
            width: 100%;
            max-width: 100%;
            padding: 0 15px;
            bottom: 0;
            position: absolute;
            text-align: center;
            
        }
        .opciones{
            margin-left: 10px;
        }
        form{
            margin: 15px;
        }                    
    </style>
</head>
<body>
    <header>
        <div class="Logo">
            <img src="Logo_Ferreweb.jpg" alt="Logo">
            <h2>FerreWeb</h2>
        </div>
        <div id="nombre">
            <span><?php echo $_SESSION["administrador"]." (Administrador)" ?></span>
            <a href="cerrar_sesion.php">Salir 
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg></a>
        </div>
    </header>
    <div class="container-fluit">
        <div class="row">
            <div class="col-3">
                <a href="" class="opciones">Agregar Proveedores</a>
                <hr>
                <a href="" class="opciones">Agregar Productos</a>
                <hr>
                <a href="" class="opciones">Agregar Categoria</a>
                <hr>
                <a href="" class="opciones">Clientes</a>
                <hr>
                <a href="" class="opciones">Ventas</a>
                <hr>
            </div>
            <div class="col-9">
               <form action="agregar_categoria.php" method="post">
                    <label for="categoria">Categoria</label>
                    <input class="form-control" type="text" name="categoria" placeholder="Nueva Categoria" aria-label="default input example">
                    <button type="submit">Agregar</button>
                </form> 
            </div>
        </div>
    </div>
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">&copy; 2017–2022 FerreWeb | Todos los derechos reservados</span>
        </div>
    </footer>       
</body>
</html>







    