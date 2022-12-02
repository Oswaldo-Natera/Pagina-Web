<?php
    require("database.php");

    $db = new Database();
    $connection = $db->connect();

    if (isset($_POST["dni"])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $email = $_POST["email"];
        $direccion = $_POST["direccion"];
        $pago = $_POST["paymentMethod"];
        $tarjeta = $_POST["tarjeta"];
        $password = $_POST["pwd"];

        if ($pago == "1") {
            $tipo = "Tarjeta de Crédito";
        } else {
            $tipo = "Tarjeta de Débito";
        }

        $query = $connection->prepare("INSERT INTO cliente(dni,nombre,apellido,email,direccion,metodo_pago,contrasena,nro_tarjeta) VALUES (:dni, :nombre, :apellido, :email, :direccion, :metodo_pago, :contrasena, :nro_tarjeta)");
        $resultado = $query->execute(['dni'=>$dni,'nombre'=>$nombre,'apellido'=>$apellido,'email'=>$email,'direccion'=>$direccion,'metodo_pago'=>$tipo,'contrasena'=>$password,'nro_tarjeta'=>$tarjeta]);

        if ($resultado) {
            echo "<h2>Registro creado con exito</h2>";
        } else {
            echo "<h2>Error al registrar</h2>";
        }
        echo "<a href='index.php'>Regresar</a>" ;
    }