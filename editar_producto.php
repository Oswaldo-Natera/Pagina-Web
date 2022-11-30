<?php
    session_start();
    require("database.php");

    $db = new Database();
    $connection = $db->connect();
    $codigo = $_GET["codigo"];
    
    $consulta = $connection->prepare("SELECT * FROM producto WHERE codigo=:codigo");
    $consulta->execute(["codigo"=>$codigo]);

    $productos = $consulta->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FerreWeb</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
</head>
<body>
<?php 
include "header_admin.php"
?>
    <div class="container-fluit">
        <div class="row">
        <?php include "menu.php" ?>
            <div class="col-9">
                <form action="guardar_producto.php" method="post" enctype="multipart/form-data">
                <label for="producto">Código</label>
                    <input class="form-control" type="text" placeholder="" id="codigo" name="codigo" value="<?php echo $productos["codigo"] ?>" disabled aria-label="default input example">
                    <br>
                    <label for="producto">Producto</label>
                    <input class="form-control" type="text" placeholder="Producto" id="producto" name="producto" value="<?php echo $productos["producto"] ?>" aria-label="default input example">
                    <br>
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" value="<?php echo $productos["descripcion"] ?>" rows="3"></textarea>
                    <br>
                    <label for="formFile" class="form-label">Imagen</label>
                    <input class="form-control" type="file" id="formFile" name="imagen">
                    <br>
                    <label for="">Precio de Venta</label>
                    <input class="form-control" type="number" placeholder="Precio de venta" name="p_venta" value="<?php echo $productos["precio_venta"] ?>" aria-label="default input example">
                    <br>
                    <label for="">Categoria</label>
                    <select class="form-select" aria-label="Default select example" name="categoria">
                        <option selected><?php echo $productos["idCategoria"] ?></option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-warning">Editar</button>
                    <br>
                    <br>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <?php include "./footer.php"
?>   
</body>
</html>