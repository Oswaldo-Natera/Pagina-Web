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
        footer{
            width: 100%;
            max-width: 100%;
            padding: 0 15px;
            bottom: 0;
            position: absolute;
            text-align: center;
            
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
                <div class="album py-5 bg-light">
                    <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach($productos as $key => $producto){ ?>
                        <div class="col">
                        <div class="card shadow-sm">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($producto["imagen"]) ?>" class="bd-placeholder-img card-img-top" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

                            <div class="card-body">
                            <p class="card-text"><?php echo $producto["descripcion"] ?>.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                                </div>
                                <small class="text-muted">$<?php echo $producto["precio_venta"] ?></small>
                            </div>
                            </div>
                        </div>
                        </div>
                    <?php } ?>
                    </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <?php include "./footer.php"
?>          
</body>
</html>