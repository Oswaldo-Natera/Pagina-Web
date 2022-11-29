<?php
    session_start();
    require('database.php');

    $db = new Database();
    $connection = $db->connect();
    
    $query = $connection->prepare("SELECT * FROM producto");
    $query->execute();

    $productos = $query->fetchAll(PDO::FETCH_ASSOC);

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
        .categoria{
            margin-left: 10px;
        }                    
    </style>
</head>
<body>
<?php include "./header_usuario.php" ?>
    <div class="container-fluit">
        <div class="row">
            <div class="col-3">
                <h2 class="categoria">Categorias</h2>
                <br>
                <a href="" class="categoria">Pinturas y Disolventes</a>
                <hr>
                <a href="" class="categoria">Herramientas</a>
                <hr>
                <a href="" class="categoria">Materiales Electricos</a>
                <hr>
                <a href="" class="categoria">Cintas</a>
                <hr>
                <a href="" class="categoria">Tuberias</a>
                <hr>
                <a href="" class="categoria">Construcción</a>
            </div>
            <div class="col-9">
                <table>
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($productos as $key => $producto){ ?>
                        <?php foreach($_SESSION["producto"] as $key => $p){ ?>
                        <tr>
                            <th><?php if ($key==$producto) {
                                echo $producto;
                            } ?></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php } ?>
                    <?php } ?>
                    </tbody>
                </table>              
            </div>
        </div>
    </div>
    <?php include "./footer.php"
?>          
</body>
</html>