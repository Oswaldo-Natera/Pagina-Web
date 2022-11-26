<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="Logo_Ferreweb.jpg" alt="Logo" width="72" height="57">
      <h2>Datos</h2>
      <p class="lead">Por favor diligencie el siguiente formulario</p>
    </div>

    <div class="row g-5">
      <div class="col-md-12 col-lg-12">
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" pattern="^[0-9]$" required>
              <div class="invalid-feedback">
                Su nombre es requerido.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Su apellido es requerido.
              </div>
            </div>

            <div class="col-12">
              <label for="dni" class="form-label">Nro. Documento</label>
              <input type="number" class="form-control" id="dni" placeholder="" required>
              <div class="invalid-feedback">
                Su número de documento es requerido.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Tu@ejemplo.com" required>
              <div class="invalid-feedback">
                Por favor no dejar en blanco e incluya "@".
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Dirección</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Por favor, digite su correo electronico.
              </div>
            </div>
          </div>
          <hr class="my-4">

          <h4 class="mb-3">Pago</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="credit">Tarjeta de Crédito</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Tarjeta de Débito</label>
            </div>
          </div>
            <div class="col-sm-12">
              <label for="tarjeta" class="form-label">Número de Tarjeta</label>
              <input type="number" class="form-control" id="tarjeta" placeholder="" value="" required>
              <div class="invalid-feedback">
                Su número de tarjeta es requerido.
              </div>
            </div>
            <div class="col-sm-12">
              <label for="pwd" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="pwd" placeholder="" value="" required>
              <div class="invalid-feedback">
                Se requiere una contraseña
              </div>
            </div>
            <div class="col-sm-12">
              <label for="pwd2" class="form-label">Confirmación de la contraseña</label>
              <input type="password" class="form-control" id="pwd2" placeholder="" value="" required>
              <div class="invalid-feedback">
              Se requiere una contraseña
              </div>
            </div>
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Registrarse</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2022 FerreWeb</p>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>   
</body>
</html>

<!-- https://localhost/php-oa/FerreWeb/registro_cliente.php -->