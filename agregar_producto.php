<?php
    session_start();
    require("database.php");

    $db = new Database();
    $connection = $db->connect();

    if (isset($_POST["producto"])) {
        $producto = $_POST["producto"];
        $descripcion = $_POST["descripcion"];
        $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
        $precio_venta = $_POST["p_venta"];

        $query = $connection->prepare("SELECT * FROM categoria");
        $query->execute();

        $categorias = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($categorias as $key => $categoria){
            if ($categoria["idCategoria"]==$_POST["categoria"]) {
                $c = $categoria["idCategoria"];
            }
        }


        $query = $connection->prepare("INSERT INTO producto(producto,descripcion,imagen,precio_venta,idCategoria) VALUES (:producto, :descripcion, :imagen, :precio_venta, :idCategoria)");
        $resultado = $query->execute(['producto'=>$producto, 'descripcion'=>$descripcion, 'imagen'=>$imagen, 'precio_venta'=>$precio_venta, 'idCategoria'=>"$c"]);

        if ($resultado) {
            echo "<h2>Producto creado con exito</h2>";
        } else {
            echo "<h2>Error al registrar</h2>";
        }
        echo "<a href='pagina_admin.php'>Regresar</a>" ;
    }