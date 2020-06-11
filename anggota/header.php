<?php
  // define ('URL','http://localhost/proyek%20akhir/ProyekAkhir');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= BASEURL; ?>/public/css/bootstrap.css">
  </head>
  <body>
    <nav class="nav justify-content-end bg-light">
      <div class="col-11 col-sm-11">
        <a href="<?=BASEURL;?>/anggota/index.php">
          <img src="<?= BASEURL; ?>/public/img/del.png" style="width:50px;length:50px;">
        </a>
        <h7 style ="color:black;">Institut Teknologi Del</h7>
      </div>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <?php
                echo('<a class="nav-link" href="../logout.php">Logout</a>');
              close_page();
          ?>
        </li>
      </ul>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <img src="<?=BASEURL;?>/public/img/Deliotclub.png" style="width:45px;length:45px;">
        <a class="navbar-brand" href="<?= BASEURL; ?>/anggota/index.php">Del IoT Club</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link justify-content-end active" href="<?= BASEURL; ?>/anggota/index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link justify-content-end active" href="<?= BASEURL; ?>/anggota/pengumuman.php">Pengumuman <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link ustify-content-end active" href="<?= BASEURL; ?>/anggota/artikel.php" style="">Artikel</a>
            <a class="nav-item nav-link ustify-content-end active" href="<?= BASEURL; ?>/anggota/proyek.php" style="">Proyek</a>
          </div>
        </div>
      </div>
    </nav>
