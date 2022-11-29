<?php

    require("database.php");

    $db = new Database();
    $connection = $db->connect();

    if (isset($_POST["codigo"])) {
        $codigo = $_POST["codigo"];
        $producto = $_POST["producto"];
        $descripcion = $_POST["descripcion"];

        // aqui va la de la imagen
        //$imagen = $_POST["imagen"];

        $precio_venta = $_POST["precio"];
        $idCategoria = $_POST["idCategoria"];

        $query = $connection->prepare("UPDATE producto SET producto=:producto, descripcion=:descripcion, precio_venta=:precio_venta, idCategoria=:idCategoria WHERE codigo=:codigo");
        $resultado = $query->execute(['codigo'=>$codigo,'producto'=>$producto,'descripcion'=>$descripcion, 'precio_venta'=>$precio_venta,'idCategoria'=>$idCategoria]);
        if ($resultado) {
            echo "<h2>Registro Editado con exito!</h2>";
        } else {
            echo "<h2>Error al eliminar el registro</h2>";
        }
        echo "<a href='producto_categoria.php'>Regresar</a>";
    } else {
        $producto = $_POST["producto"];
        $descripcion = $_POST["descripcion"];
        // $imagen = $_POST["imagen"];
        $precio_venta = $_POST["precio"];
        $idCategoria = $_POST["idCategoria"];

        $query = $connection->prepare("INSERT INTO producto(producto,descripcion,precio_venta) VALUES (:producto,:descripcion,:precio_venta)");
        $resultado = $query->execute(['titulo'=>$titulo,'autor'=>$autor,'ano'=>$ano]);
        if ($resultado) {
            echo "<h2>Producto creado con exito</h2>";
        } else {
            echo "<h2>Error al eliminar el registro</h2>";
        }
        echo "<a href='producto_categoria.php'>Regresar</a>" ;
    }