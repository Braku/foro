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

      <div style="margin-top: 2%; width: auto;" id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
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
                  <img src="assets/img/placeholder_m.png" class="box-banner d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5> <span class="placeholder col-6 placeholder-lg"></span> </h5>
                    <p> <span class="placeholder col-7 placeholder-s"></span> </p>
                  </div>
                </div>
                ');
              } else {
                echo ('
                <div class="carousel-item">
                  <img src="assets/img/placeholder_m.png" class="box-banner d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5> <span class="placeholder col-6 placeholder-lg" ></span> </h5>
                    <p> <span class="placeholder col-7 placeholder-s"></span> </p>
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
      <section class="card float-start" style="width: 73%; height: 100%; border-radius: 0; margin-bottom: 10%;">

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

      <aside class="float-end overflow-auto" style="width: 27%; height: 100%; border-radius: 0;">
        <?php include_once 'includes/aside.php'; ?>
      </aside>
    </div>
  </body>
</html>
