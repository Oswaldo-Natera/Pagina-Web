<?php
    session_start();
    require("database.php");

    $db = new Database();
    $connection = $db->connect();
    
    $query = $connection->prepare("SELECT * FROM categoria");
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
        <?php include "menu.php" ?>
            <div class="col-9">
                <form action="agregar_producto.php" method="post" enctype="multipart/form-data">
                    <label for="producto">Producto</label>
                    <input class="form-control" type="text" placeholder="Producto" id="producto" name="producto" aria-label="default input example">
                    <br>
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3"></textarea>
                    <br>
                    <label for="formFile" class="form-label">Imagen</label>
                    <input class="form-control" type="file" id="formFile" name="imagen">
                    <br>
                    <label for="">Precio de compra</label>
                    <input class="form-control" type="number" placeholder="Precio de compra" name="p_compra" aria-label="default input example">
                    <br>
                    <label for="">Precio de Venta</label>
                    <input class="form-control" type="number" placeholder="Precio de venta" name="p_venta" aria-label="default input example">
                    <br>
                    <label for="">Categoria</label>
                    <select class="form-select" aria-label="Default select example" name="categoria">
                        <option selected>Elija la categoria</option>
                    <?php
                        $contador = 1; 
                        foreach($categorias as $key => $categoria){
                            $contador++;
                    ?>        
                        <option value="<?php echo $contador ?>"><?php echo $categoria["categoria"] ?></option>
                    <?php } ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-warning">Agregar</button>
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