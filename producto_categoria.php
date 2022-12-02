<?php
    session_start();
    require("database.php");

    $db = new Database();
    $connection = $db->connect();
    
    $query = $connection->prepare("SELECT codigo, producto, precio_venta, categoria FROM producto INNER JOIN categoria ON producto.idCategoria = categoria.idCategoria");
    $query->execute();

    $categorias = $query->fetchAll(PDO::FETCH_ASSOC);
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
        .opciones{
            margin-left: 10px;
        } 
        #borrar{
            color: #E74C3C;
        }
        #editar{
            color: #28B463;
        }              
    </style>
</head>
<body>
<?php 
include "header_admin.php"
?>
    <div class="container-fluid">
        <div class="row">
            <?php include "menu.php" ?>
            <div class="col-9">
                <br>
                <center><table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Codigo</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($categorias as $key => $categoria){ ?>
                        <tr>
                            <td><?php echo $categoria["codigo"] ?></td>
                            <td><?php echo $categoria["producto"] ?></td>
                            <td>$<?php echo $categoria["precio_venta"] ?></td>
                            <td><?php echo $categoria["categoria"] ?></td>
                            <td><a id="editar" href="editar_producto.php?codigo=<?php echo $categoria["codigo"]?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg></a></td>
                            <td><a id="borrar" href="eliminar_producto.php?codigo=<?php echo $categoria["codigo"]?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                </svg></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table></center>
                <button class="btn btn-warning" onclick="producto()">Agregar Producto</button>
                
            </div>
        </div>
    </div>
    <?php include "./footer.php"
?>  
<script>
    function producto(){
        window.location.href="producto.php"
    }
</script>        
</body>
</html>