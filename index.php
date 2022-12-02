<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FerreWeb</title>
    <link rel="icon" type="image/x-icon" href="Logo_Ferreweb.ico">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
      article{
        text-align: right;
        width: 30%;
        text-align: center;
        margin: 50px;
      }
      .body{
        position: absolute;
        padding-bottom: 3em;
        min-height: 100vh;
      }   
    </style>
  </head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      
      <a href="./index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="Logo_Ferreweb.jpg" alt="Logo" width="70px" height="60px">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2" onclick="inicio_sesion()">Iniciar Sesión 
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
        </button>
        <button type="button" class="btn btn-primary" onclick="registro_cliente()">Registrarse</button>
      </div>
    </header>
</div>
  <section>
    <article>
      <h2>FerreWeb</h2>
      <p>Bienvenidos a nuestra pagina oficial, le invitamos a ver nuestro catalogo con una gran variedad de productos</p>
      <button>Productos</button>
    </article>
  </section>
  <br>
  <br>
  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">¿Quienes somos?</h2>
        <p class="lead">Ferreweb es una empresa dedicada a la distribuicon de elementos de construccion</p>
      </div>
      <div class="col-md-5">
        <img src="https://static.vecteezy.com/system/resources/previews/010/856/616/non_2x/plastic-yellow-safety-helmet-or-construction-hard-hat-concept-safety-project-of-workmen-as-engineer-isolated-on-white-background-png.png" alt="" height="500" width="500" srcset="">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">¿Por que nosotros?<span class="text-muted"></span></h2>
        <p class="lead">Si quieres un buen servicio, con entrega a domicilio y si necesitas una persona especializada tambien te la podemos ofrecer, con un 100% de garantia</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="https://falabella.scene7.com/is/image/FalabellaCO/8270374_1?wid=800&hei=800&qlt=70" alt="" height="500" width="500" srcset="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Nuestros valores<span class="text-muted"></span></h2>
        <p class="lead">Siempre la honestidad, puntualidad y responsabilidad son el lema de nuestra empresa</p>
      </div>
      <div class="col-md-5">
      <img src="http://ferretero.com/wp-content/uploads/2019/06/screw097858347950.png" alt="" height="400" width="400" srcset="">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
  <?php include "./footer.php"
?>    
</body>
<script>
  function inicio_sesion(){
    window.location.href="inicio_sesion.php"
  }
  function registro_cliente(){
    window.location.href="registro_cliente.php"
  }
</script>
</html>
<!-- http://localhost/php-oa/FerreWeb/inicio.php -->