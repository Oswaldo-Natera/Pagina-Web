<?php
    require("database.php");

    $db = new Database();
    $connection = $db->connect();
    $codigo = $_GET["codigo"];

    $consulta = $connection->prepare("DELETE FROM producto WHERE codigo=?");
    $resultado = $consulta->execute([$codigo]);

    if ($resultado) {
        echo "<h2>Registro Eliminado!</h2>";
    } else {
        echo "<h2>Error al eliminar el registro</h2>";
    }
    echo "<a href='./eliminar_producto1.php'>Regresar</a>";
