<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= BASEURL; ?>/public/css/bootstrap.css">
    <link rel="icon" type="image/png" src="img/del.png" />
  </head>
  <body>
    <nav class="nav bg-light justify-content-end">
      <div class="col-10 col-sm-10">
        <a href="<?= BASEURL; ?>">
          <img src="<?= BASEURL; ?>/public/img/del.png" style="width:50px;length:50px;">
        </a>
        <h7 style ="color:black;">Institut Teknologi Del</h7>
      </div>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL;?>/register.php">Register</a>
        </li>
        <li class="nav-item">
          <?php
              if(isset($_SESSION['is_logged_in'])){
                  echo('<a class="nav-link" href="'.BASEURL.'/logout.php">Logout</a>');
              }
              else{
                  echo('<a class="nav-link" href="'.BASEURL.'/login.php">Login</a>');
              }

              close_page();
          ?>
        </li>
      </ul>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <img src="<?=BASEURL;?>/public/img/Deliotclub.png" style="width:45;length:45;">
        <a class="navbar-brand" href="<?= BASEURL; ?>">Del IoT Club</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link justify-content-end active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link justify-content-end active" href="<?= BASEURL; ?>/guest/pengumuman.php">Pengumuman <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link justify-content-end active" href="<?= BASEURL; ?>/guest/artikel.php" style="">Artikel</a>
            <a class="nav-item nav-link justify-content-end active" href="<?= BASEURL; ?>/guest/proyek.php" style="">Proyek</a>
          </div>
        </div>
      </div>
    </nav>
