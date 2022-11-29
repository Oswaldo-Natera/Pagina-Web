<?php 
    session_start();
    require('database.php');

    $db = new Database();
    $connection = $db->connect();
    
    $query = $connection->prepare("SELECT codigo,producto,precio_venta FROM producto");
    $query->execute();

    $productos = $query->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <?php include "header_admin.php" ?>
    <table>
        <thead>
            <tr>
                <td>codigo</td>
                <td>Producto</td>
                <td>Precio</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $key => $producto) { ?>
                <tr>
                    <td><?php echo $producto["codigo"] ?></td>
                    <td><?php echo $producto["producto"] ?></td>
                    <td><?php echo $producto["precio_venta"] ?></td>
                    <td><a href="eliminar_producto.php?codigo=<?php echo $producto["codigo"]?>">Eliminar</a></td>
                </tr>
            <?php }?>
        </tbody>    
    </table>
    <?php include "footer.php"?>
</body>
</html>