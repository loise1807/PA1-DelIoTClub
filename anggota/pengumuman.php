<?php
    session_start();
    include_once('common/functions.php');
    include_once('common/config.php');
    include_once('header.php');
    open_page('Pengumuman - Anggota');

    $host = HOST;
    $user = USER;
    $pass = PASS;
    $db_name = DB_NAME;

    $database = new mysqli($host,$user,$pass,$db_name);
    $query = "SELECT * FROM pengumuman ORDER BY tanggal_pengumuman DESC";
    $result_set = $database->query($query);
?>
<div class="container">
  <div class="row" style="background:url('<?= BASEURL;?>/public/img/deliotclub.png') no-repeat center;size:cover;">
  <div class="row">
    <?php while($row = $result_set->fetch_assoc()){ ?>
      <div class="col-sm-6 mt-2 mb-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?=$row['judulPengumuman']?></h5>
            <p class="card-text"><?=$row['tanggal_pengumuman']?></p>
            <a href="detail/pengumuman.php?id_pengumuman=<?php echo $row['id_pengumuman'];?>" class="btn btn-success">Detail</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<?php
  include_once('../public/footer.php');
?>
