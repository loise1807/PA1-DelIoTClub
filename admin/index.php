<?php
    session_start();
    include_once('../common/functions.php');
    include_once('../config.php');
    include_once('header.php');
    open_page('Index as Admin');
?>
<div class="container">
  <div class="container mt-3">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= BASEURL; ?>/public/img/img1.png" class="d-block w-100 rounded-circle shadow" alt"Image">
        </div>
        <div class="carousel-item">
          <img src="<?= BASEURL; ?>/public/img/img2.jpg" class="d-block w-100 rounded-circle shadow" alt"Image">
        </div>
        <div class="carousel-item">
          <img src="<?= BASEURL; ?>/public/img/img3.png" class="d-block w-100 rounded-circle shadow" alt"Image">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<?php
  include_once('../public/footer.php');
?>
