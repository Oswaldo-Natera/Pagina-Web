<?php
    if ($_POST["documento"]==1000411616 and $_POST["contrasena"]=="miguelZap") {
        session_start();
        $_SESSION["administrador"] = "Miguel Zapata";
        header("location:pagina_admin.php");
    }
    elseif ($_POST["documento"]==4901172 and $_POST["contrasena"]=="oswaldoanm") {
        session_start();
        $_SESSION["administrador"] = "Oswaldo Natera";
        header("location:pagina_admin.php");
    }else {
       require("database.php");

        $db = new Database();
        $connection = $db->connect();
        
        $query = $connection->prepare("SELECT * FROM cliente WHERE dni=".$_POST["documento"]);
        $query->execute();

        $consulta = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($consulta as $key => $dato){
            if ($_POST["documento"]==$dato["dni"]) {
                if ($_POST["contrasena"]==$dato["contrasena"]) {
                    session_start();
                    $_SESSION["usuario"] = $dato["nombre"]." ".$dato["apellido"];
                    header("location:pagina_cliente.php");
                }
            } else {
                header("location:inicio_sesion.php");
            }
        } 
    }
    

    