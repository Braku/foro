<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include_once 'includes/head.php'; ?>
  </head>
  <body>
    <div class="container h-100">
		  <div class="d-flex justify-content-center h-100">
			  <div class="user_card">
				  <div class="d-flex justify-content-center">
				  </div>
				  <div class="d-flex justify-content-center form_container">
  					<form>
  						<div class="mb-3 input-group">
  								<span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
  							<input type="text" name="" class="form-control input_user" value="" placeholder="Usuario">
  						</div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-key"></i></span>
                <input type="password" class="form-control" aria-label="" placeholder="Contrase&ntilde;a" aria-describedby="inputGroup-sizing-sm">
              </div>
  						<div class="form-group">
  							<div class="custom-control custom-checkbox">
  								<input type="checkbox" class="custom-control-input" id="customControlInline">
  								<label class="custom-control-label" for="customControlInline">Recu&eacute;rdeme</label>
  							</div>
  						</div>
  							<div class="d-flex justify-content-center mt-3 login_container">
  				 	      <button type="submit" name="button" style="padding: 5px 20px;" class="btn login_btn azul">Entrar</button>
  				       </div>
  					</form>
				  </div>
  				<div class="mt-4">
  					<div class="d-flex justify-content-center links">
  						¿No tienes una cuenta? <a href="form_registro.php" class="ml-2">Registrate</a>
  					</div>
  					<div class="d-flex justify-content-center links">
  						<a href="#">¿Olvidaste tu contraseña?</a>
  					</div>
  				</div>
			  </div>
		  </div>
	  </div>
  </body>
</html>
