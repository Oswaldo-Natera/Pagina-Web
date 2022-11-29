<?php

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
    <title>Document</title>
</head>
<body>
    <form action="guardar_producto.php" method="POST">
        <label for="codigo" hidden>Codigo</label>
        <input type="text" id="codigo" name="codigo" value="<?php echo $productos["codigo"] ?>" hidden>
        <label for="producto">Nombre del producto</label>
        <input type="text" id="producto" name="producto" value="<?php echo $productos["producto"] ?>">
        <br>
        <br>
        <label for="descripcion">descripcion del producto</label>
        <input type="text" id="descripcion" name="descripcion" value="<?php echo $productos["descripcion"] ?>">
        
        <!-- aqui ira la de imagen  -->
        <!-- <label for="imagen">imagen del producto</label>
        <input type="text" id="imagen" name="imagen" value="?php echo $productos["imagen"] ?>">
         -->
        
        <label for="precio">Precio de venta</label>
        <input type="text" name="precio" id="precio" value="<?php echo $productos["precio_venta"] ?>">
        <label for="idCategoria">Categoria del producto</label>
        <input type="text" name="idCategoria" id="idCategoria" value="<?php echo $productos["idCategoria"] ?>">
        <button type="submit">Editar</button>
    </form>
</body>
</html>