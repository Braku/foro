<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../../assets/img/.ico">
    <link rel="stylesheet" href="../../assets/css/master.css">
    <link rel="stylesheet" href="../../assets/css/colorimetria.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </head>
  <body>
    <header class="container" style="padding: 0;">
      <?php include_once '../../includes/nav.php'; ?>
    </header>
    <div class="container" style="margin: 2% auto;">
      <section class="card" style=" height: auto; border: 0; border-radius: 0;">
        <div class="card-body">
          <div class="">
            <div class="placeholder-glow">
              <h4 class="card-title">
                <span class="placeholder col-3 placeholder"></span>
              </h4>
              <div class="placeholder-glow card-body">
                <p class="">
                  <span class="placeholder col-7 placeholder-s"></span>
                  <span class="placeholder col-4 placeholder-s"></span>
                  <span class="placeholder col-4 placeholder-s"></span>
                  <span class="placeholder col-6 placeholder-s"></span>
                  <span class="placeholder col-3 placeholder-s"></span>
                  <span class="placeholder col-7 placeholder-s"></span>
                  <span class="placeholder col-3 placeholder-s"></span>
                  <span class="placeholder col-2 placeholder-s"></span>
                  <span class="placeholder col-4 placeholder-s"></span>
                  <span class="placeholder col-4 placeholder-s"></span>
                  <span class="placeholder col-5 placeholder-s"></span>
                  <span class="placeholder col-3 placeholder-s"></span>
                  <span class="placeholder col-4 placeholder-s"></span>
                  <span class="placeholder col-2 placeholder-s"></span>
                  <span class="placeholder col-4 placeholder-s"></span>
                  <span class="placeholder col-5 placeholder-s"></span>
                  <span class="placeholder col-3 placeholder-s"></span>
                  <span class="placeholder col-5 placeholder-s"></span>
                  <span class="placeholder col-1 placeholder-s"></span>
                  <span class="placeholder col-2 placeholder-s"></span>
                  <span class="placeholder col-1 placeholder-s"></span>
                  <span class="placeholder col-4 placeholder-s"></span>
                  <span class="placeholder col-2 placeholder-s"></span>
                  <span class="placeholder col-4 placeholder-s"></span>
                  <span class="placeholder col-5 placeholder-s"></span>
                  <span class="placeholder col-5 placeholder-s"></span>
                  <span class="placeholder col-2 placeholder-s"></span>
                  <span class="placeholder col-4 placeholder-s"></span>
                  <span class="placeholder col-2 placeholder-s"></span>
                  <span class="placeholder col-7 placeholder-s"></span>
                  <span class="placeholder col-2 placeholder-s"></span>
                  <span class="placeholder col-2 placeholder-s"></span>
                  <span class="placeholder col-2 placeholder-s"></span>
                  <span class="placeholder col-4 placeholder-s"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="card" style="border: 0; border-radius: 0;">
        <div class="card-body">
          <div class="row">
            <?php
                for ($i = 0; $i < 3; $i++) {
                  echo ('
                  <div class="col">
                    <div class="card" style="border: 0;">
                      <div class="card-body text-center">
                        <div>
                          <div class="" style="margin: 2% 0;">
                            <h5 class="card-title placeholder-glow">
                              <span class="placeholder col-6 placeholder-lg"></span>
                            </h5>
                            <p class="card-text placeholder-glow">
                              <span class="placeholder col-7 placeholder-s"></span>
                              <span class="placeholder col-4 placeholder-s"></span>
                              <span class="placeholder col-4 placeholder-s"></span>
                              <span class="placeholder col-6 placeholder-s"></span>
                              <span class="placeholder col-8 placeholder-s"></span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  ');
                }
             ?>

          </div>
        </div>
      </section>

      <!-- COMENTARIOS -->
      <section class="card" style=" border: 0; border-radius: 0;">
        <div class="card-body" style="max-width: 100%;">
          <script type="text/javascript">
            alert('No se encontro el taller');
          </script>
          <div class="row g-0">
            <section class="container mt-5">
              <div class="row d-flex justify-content-left">
                <div class="col-md-8 card-body placeholder-glow">
                  <div class="headings justify-content-between align-items-center mb-3">
                    <h5>
                      <span class="placeholder col-4 placeholder-lg"></span>
                    </h5>
                  </div>
                  <?php
                    for ($i=0; $i < 2; $i++) {
                      echo ('
                        <div class="card p-3" style=" border: 0;">
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="user flex-row align-items-center">
                              <img src="../../assets/img/placeholder_u.jpg" width="50px" class="user-img rounded-circle mr-2">
                            </div>
                            <div class="card-body">
                              <span class="placeholder col-4 placeholder-s" style="background: #00a4ff;"></span>
                              <p class="">
                                <span class="placeholder col-7 placeholder-xs"></span>
                                <span class="placeholder col-4 placeholder-xs"></span>
                                <span class="placeholder col-2 placeholder-xs"></span>
                                <span class="placeholder col-5 placeholder-xs"></span>
                              </p>
                            </div>
                            <span class="placeholder col-2 placeholder-s"></span>
                          </div>
                        </div>
                      ');
                    }
                   ?>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

    </div>
  </body>
</html>
