<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include_once 'includes/head.php'; ?>
  </head>
  <body>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
      <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
          <div class="user_card">
            <div class="d-flex justify-content-center">
  				  </div>
            <div class="d-flex justify-content-center form_container">
              <form class="" action="registro.php" method="post">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default"> <i class="fa fa-user"></i> </span>
                  <input name="" class="form-control" placeholder="Nombre(s)" type="text">
                  <input name="" class="form-control" placeholder="Apellido(s)" type="text">
                </div> <!-- form-group// -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default"> <i class="fa fa-envelope"></i> </span>
                  <input name="" class="form-control" placeholder="Correo electronico" type="email">
                </div> <!-- form-group// -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default"> <i class="fa fa-phone"></i> </span>
                  <input name="" class="form-control" placeholder="Número celular" type="text">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default"> <i class="fa fa-lock"></i> </span>
                  <input class="form-control" placeholder="Ingresa una contrase&ntilde;a" type="password">
                </div> <!-- form-group// -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default"> <i class="fa fa-lock"></i> </span>
                  <input class="form-control" placeholder="Repite la contrase&ntilde;a" type="password">
                </div> <!-- form-group// -->
                <div class="form-group">
                  <button type="submit" class="btn login_btn azul" style="padding: 5px 20px;"> Crea tu cuenta  </button>
                </div> <!-- form-group// -->
                <p class="text-center">¿Tienes una cuenta? <a href="form_login.php">Ingresa</a> </p>
              </form>
            </div>
          </div>
        </div> <!-- card.// -->

      </div>
      <!--container end.//-->

      <br><br>
  </body>
</html>
