<?php
    session_start();
    require("database.php");

    $db = new Database();
    $connection = $db->connect();
    
    $query = $connection->prepare("SELECT codigo, producto, precio_venta, categoria FROM producto INNER JOIN categoria ON producto.idCategoria = categoria.idCategoria");
    $query->execute();

    $categorias = $query->fetchAll(PDO::FETCH_ASSOC);
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
        .opciones{
            margin-left: 10px;
        }                 
    </style>
</head>
<body>
<?php 
include "header_admin.php"
?>
    <div class="container-fluit">
        <div class="row">
            <div class="col-3">
                <a href="" class="opciones">Agregar Proveedores</a>
                <hr>
                <a href="producto.php" class="opciones">Agregar Productos</a>
                <hr>
                <a href="categoria.php" class="opciones">Agregar Categoria</a>
                <hr>
                <a href="" class="opciones">Clientes</a>
                <hr>
                <a href="" class="opciones">Ventas</a>
                <hr>
                <a href="" class="opciones">Productos</a>
            </div>
            <div class="col-9">
                <center><table>
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($categorias as $key => $categoria){ ?>
                        <tr>
                            <td><?php echo $categoria["codigo"] ?></td>
                            <td><?php echo $categoria["producto"] ?></td>
                            <td>$<?php echo $categoria["precio_venta"] ?></td>
                            <td><?php echo $categoria["categoria"] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table></center>
            </div>
        </div>
    </div>
    <?php include "./footer.php"
?>          
</body>
</html>