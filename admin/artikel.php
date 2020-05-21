<?php
    session_start();
    include_once('../common/functions.php');
    include_once('../config.php');
    include_once('header.php');
    open_page('Artikel - Admin');

    $host = HOST;
    $user = USER;
    $pass = PASS;
    $db_name = DB_NAME;

    $database = new mysqli($host,$user,$pass,$db_name);
    $query = "SELECT * FROM artikel ORDER BY tanggal_artikel DESC";
    $result_set = $database->query($query);
?>
<div class="container">
  <button class="btn btn-primary mt-2" onclick="window.location.href='tambahartikel.php'">Tambah Data Artikel</button>
  <div class="row" style="background:url('<?= BASEURL;?>/public/img/deliotclub.png') no-repeat center;size:cover;">
    <?php while($row = $result_set->fetch_assoc()){ ?>
      <div class="col-sm-6 mt-2 mb-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?=$row['topik']?></h5>
            <p class="card-text"><?=$row['tanggal_artikel']?></p>
            <a href="detail/artikel.php?id_artikel=<?php echo $row['id_artikel'];?>" class="btn btn-success">Detail</a>
            <a href="ubahartikel.php?id_artikel=<?php echo $row['id_artikel'];?>" class="btn btn-warning">Ubah</a>
            <a href="hapusartikel.php?id_artikel=<?php echo $row['id_artikel'];?>" onclick="return confirm('Apakah Anda sudah yakin ?');" class="btn btn-danger">Hapus</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<?php
  include_once('../public/footer.php');
?>
