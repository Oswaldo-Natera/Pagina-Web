<?php
    session_start();
    require("database.php");

    $db = new Database();
    $connection = $db->connect();
    
    $query = $connection->prepare("SELECT dni,nombre,apellido,email,direccion FROM cliente");
    $query->execute();

    $clientes = $query->fetchAll(PDO::FETCH_ASSOC);
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
                            <th>Dni</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Dirección</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($clientes as $key => $cliente){ ?>
                        <tr>
                            <td><?php echo $cliente["dni"] ?></td>
                            <td><?php echo $cliente["nombre"] ?></td>
                            <td><?php echo $cliente["apellido"] ?></td>
                            <td><?php echo $cliente["email"] ?></td>
                            <td><?php echo $cliente["direccion"] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table></center>                
            </div>
        </div>
    </div>
    <?php include "./footer.php"?>          
</body>
</html>