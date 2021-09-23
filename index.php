<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio | </title>

    <?php include_once 'includes/head.php' ?>
  </head>
  <body>
    <header class="container" style="padding: 0;">
      <?php
        include_once 'includes/nav.php';
      ?>

      <div style="margin-top: 2%; width: auto; height: 100%; border-radius: 0;" id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <?php
            for ($i=0; $i < 3; $i++) {
              if ($i == 0) {
                echo ('
                <div class="carousel-item active">
                  <div class="card text-center align-middle" style="border: 0; border-radius: 0; height: 200px;">
                    <div class="card-body">
                      <h3>Anuncios</h3>
                      <h5> <span class="placeholder col-6 placeholder-lg"></span> </h5>
                      <p>
                        <span class="placeholder col-7 placeholder-s"></span>
                        <span class="placeholder col-3 placeholder-s"></span>
                        <span class="placeholder col-2 placeholder-s"></span>
                        <span class="placeholder col-4 placeholder-s"></span>
                        <span class="placeholder col-1 placeholder-s"></span>
                        <span class="placeholder col-5 placeholder-s"></span>
                      </p>
                    </div>
                  </div>
                </div>
                ');
              } else {
                echo ('
                <div class="carousel-item">
                  <div class="card text-center align-middle" style="border: 0; border-radius: 0; height: 200px;">
                    <div class="card-body">
                      <h3>Anuncios</h3>
                      <h5> <span class="placeholder col-6 placeholder-lg" ></span> </h5>
                      <p>
                        <span class="placeholder col-7 placeholder-s"></span>
                        <span class="placeholder col-3 placeholder-s"></span>
                        <span class="placeholder col-2 placeholder-s"></span>
                        <span class="placeholder col-4 placeholder-s"></span>
                        <span class="placeholder col-1 placeholder-s"></span>
                        <span class="placeholder col-5 placeholder-s"></span>
                      </p>
                    </div>
                  </div>
                </div>
                ');
              }
            }
           ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </header>
    <div class="container" style="height: 100%; padding: 0;">
      <div class="" style="height: auto; width: 100%; background: white;">

        <section class="card float-start" style="width: 73%; height: auto; border: 0; border-radius: 0; margin-bottom: 10%;">
          <h3 class="card-body">M&aacute;s relevante</h3>
          <?php
          for ($i=0; $i < 7; $i++) {
            echo('
            <div class="card-body" style="height: 100%;">

              <a href="categorias/categoria">
                <h5 class="card-title placeholder-glow">
                  <span class="placeholder col-6 placeholder-lg"></span>
                </h5>
              </a>
              <p class="card-text placeholder-glow">
                <span class="placeholder col-7 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
                <span class="placeholder col-6 placeholder-s"></span>
                <span class="placeholder col-8 placeholder-s"></span>
              </p>
            </div>
            ');
          }
          ?>

        </section>

        <aside class="card float-end overflow-auto" style="width: 27%; height: 100%; border-radius: 0; border: 0;">
          <h4 class="card-body">Temas</h4>
          <?php
          for ($i=0; $i < 4; $i++) {
            echo('
            <div class="card-body" style="width: 100%; border-radius: 0;" aria-hidden="true">

              <div class="">
                  <h5 class="card-title placeholder-glow">
                    <span class="placeholder col-6 placeholder-lg" ></span>
                  </h5>
                  <p class="card-text placeholder-glow">
                  <span class="placeholder col-7 placeholder-s" ></span>
                  <span class="placeholder col-4 placeholder-s" ></span>
                  <span class="placeholder col-4 placeholder-s" ></span>
                  <span class="placeholder col-6 placeholder-s" ></span>
                  <span class="placeholder col-8 placeholder-s" ></span>
                </p>
                <button type="button" name="button" data-bs-toggle="modal" data-bs-target="#ver" class="btn placeholder float-end" style="padding: 5px 50px; background: #1b3e8c;"></button>
              </div>
              <div class="modal fade" id="ver" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ver" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Titulo tema</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="card p-3" style=" border: 0;">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="user flex-row align-items-center">
                          <img src="assets/img/placeholder_u.jpg" width="50px" class="user-img rounded-circle mr-2">
                        </div>
                        <div class="card-body">
                          <span class="placeholder col-4 placeholder-s" style="background: #00a4ff;"></span>
                          <span class="placeholder col-3 placeholder-s" style="background: #00a4ff;"></span>
                          <p class="">
                            <span class="placeholder col-7 placeholder-sm"></span>
                            <span class="placeholder col-4 placeholder-sm"></span>
                            <span class="placeholder col-2 placeholder-sm"></span>
                            <span class="placeholder col-5 placeholder-sm"></span>
                            <span class="placeholder col-3 placeholder-sm"></span>
                            <span class="placeholder col-4 placeholder-sm"></span>
                            <span class="placeholder col-6 placeholder-sm"></span>
                          </p>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <a href="categorias/categoria" class="btn btn-primary">Ver m&aacute;s</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            ');
          }
          ?>
        </aside>

      </div>
    </div>
  </body>
</html>
