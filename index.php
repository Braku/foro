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

      <div style="margin-top: 2%; width: auto; height: 200px;" id="carouselExampleCaptions" class="carousel carousel-dark slide bg-light" data-bs-ride="carousel">
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
                  <div class="card text-center align-middle" style="border: 0; height: 150px;">
                    <div class="card-body">
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
                  <div class="card text-center align-middle" style="border: 0; height: 150px;">
                    <div class="card-body">
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
    <div class="container bg-secondary" style="height: auto; padding: 0;">
      <section class="card float-start" style="width: 73%; height: 100%; border: 0; border-radius: 0; margin-bottom: 10%;">
        <h3 class="card-body">M&aacute;s relevante</h3>
        <?php
        for ($i=0; $i < 5; $i++) {
          echo('
            <div class="card-body">
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
          ');
        }
         ?>

      </section>

      <aside class="float-end overflow-auto" style="width: 27%; height: 80%; border-radius: 0;">
        <?php
          for ($i=0; $i < 4; $i++) {
            echo('
            <div class="card" style="width: 100%; border-radius: 0;" aria-hidden="true">

              <div class="card-body">
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
                <a href="#" tabindex="-1" class="btn disabled placeholder col-6 float-end" style=" border-radius: 50px 0; background: #1D3E85; padding: 7px 20px;"></a>
              </div>
            </div>
            ');
          }
        ?>
      </aside>
    </div>
  </body>
</html>
