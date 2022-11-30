<?php
    session_start();
    require("database.php");

    $db = new Database();
    $connection = $db->connect();

    if (isset($_POST["codigo"])) {
        $codigo = $_POST["codigo"];
        $producto = $_POST["producto"];
        $descripcion = $_POST["descripcion"];

        // aqui va la de la imagen
        $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

        $precio_venta = $_POST["p_venta"];
        $idCategoria = $_POST["categoria"];

        $query = $connection->prepare("UPDATE producto SET producto=:producto, descripcion=:descripcion, imagen=:imagen, precio_venta=:precio_venta, idCategoria=:idCategoria WHERE codigo=:codigo");
        $resultado = $query->execute(['codigo'=>$codigo,'producto'=>$producto,'descripcion'=>$descripcion, 'imagen'=>$imagen, 'precio_venta'=>$precio_venta,'idCategoria'=>$idCategoria]);
        if ($resultado) {
            echo "<h2>Registro Editado con exito!</h2>";
        } else {
            echo "<h2>Error al eliminar el registro</h2>";
        }
        echo "<a href='producto_categoria.php'>Regresar</a>";
    }