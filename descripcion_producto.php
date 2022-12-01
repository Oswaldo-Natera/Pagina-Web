<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FerreWeb</title>
    <link rel="icon" type="image/x-icon" href="Logo_Ferreweb.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
   <style>
        header{
            background-color: gray;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        #nombre{
            padding-right: 20px;
        }
        body{
            position: relative;
            padding-bottom: 3em;
            min-height: 100vh;
            width: 100%;
            height: 100%;
        }
        button{
            float: right;
            margin-right: 25px;
        }
    </style>
</head>
<body><?php 
include "./header_usuario.php"
?>
    <br>
    <div class="container marketing">

<!-- START THE FEATURETTES -->

        <div class="row featurette">
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>            
        </div>
    </div>
    <hr>
    <button class="btn btn-primary">Agregar al Carrito</button>
    <br>
    <br>
    <?php include "./footer.php"
?>    
</body>
</html>
<!-- https://localhost/php-oa/FerreWeb/descripcion_producto.php -->