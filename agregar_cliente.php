<?php
    require("database.php");

    $db = new Database();
    $connection = $db->connect();

    

    if(preg_match('/^[0-9]+$/',$_POST["dni"])== 1){
        $dni = $_POST["dni"];
    }else{echo ("Porfavor ingrese un dni valido <br>");}

    if(preg_match('/^[a-zñÑ A-Z]+$/',$_POST["nombre"])== 1){
        $nombre = $_POST["nombre"];
    }else{echo ("Porfavor ingrese un nombre valido <br>");}

    if(preg_match('/^[a-zñÑ A-Z]+$/',$_POST["apellido"])== 1){
        $apellido = $_POST["apellido"];
    }else{echo ("Porfavor ingrese un apellido valido <br>");}

    if(preg_match("/(^([A-Za-z.]|@|[0-9])+$)/",$_POST["email"])== 1){
        $email = $_POST["email"];
    }else{echo ("Porfavor ingrese un email valido <br>");}

    if(preg_match('/^[0-9]+$/',$_POST["tarjeta"])== 1){
        $tarjeta = $_POST["tarjeta"];
    }else{echo ("Porfavor ingrese una tarjeta valida <br>");}

    $direccion = htmlentities($_POST["direccion"]);
    $pago = $_POST["paymentMethod"];

    if(preg_match('/^[0-9]+$/',$_POST["pwd"])== 1){        
        $password = $_POST["pwd"];
        }else{echo ("Porfavor ingrese una contraseña valida <br>");}

    if (isset($nombre) or isset($apellido) or isset($pwd)) {
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
    }else{
        echo" <h2>Error al ingresar datos</h2><br><a href='registro_cliente.php'>Regresar</a>"; }
