<?php
    session_start();
    require("database.php");

    $db = new Database();
    $connection = $db->connect();

    if (isset($_POST["categoria"])) {
        $categoria = $_POST["categoria"];

        $query = $connection->prepare("INSERT INTO categoria(categoria) VALUES (:categoria)");
        $resultado = $query->execute(['categoria'=>$categoria]);

        if ($resultado) {
            echo "<h2>Categoria creada con exito</h2>";
        } else {
            echo "<h2>Error al registrar</h2>";
        }
        echo "<a href='pagina_admin.php'>Regresar</a>" ;
    }