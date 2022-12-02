<?php
    session_start();
    require('database.php');
    
    $db = new Database();
    $connection = $db->connect();
    $a =$_SESSION["producto"];
    // $p=array();
    // array_push($a, $p);
    #
    $query = $connection->prepare("SELECT * FROM producto")or die($connection->error);
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_ASSOC);
    
    
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
                <br>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Codigo</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php
                    $con=0;
                    foreach ($productos as $key => $producto) {
                        $con++;
                        if (isset($_POST["producto_".$con])){
                            if ($_POST["producto_".$con]==$producto["codigo"]) { ?>
                                <tr>
                                        <td><?php echo $producto["codigo"]?></td>
                                        <td><?php echo $producto["producto"] ?></td>
                                        <td>$<?php echo $producto["precio_venta"] ?></td>
                                        <td>$<?php echo intval($_POST["cantidad"]) ?></td>
                                        <td>$<?php echo intval($producto["precio_venta"])*intval($_POST["cantidad"]) ?></td>
                                    </tr> 
                            <?php }
                        }
                    }?>
                                   
                               
                           
                  
                    
                    </tbody>
                </table>              
            </div>
        </div>
    </div>
    <?php include "./footer.php"
?>          
</body>
</html>