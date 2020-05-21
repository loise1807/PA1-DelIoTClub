<?php
    session_start();
    include_once('../../common/functions.php');
    include_once('../../config.php');
    open_page('Pengumuman');
    include_once('../../public/header.php');

    $host = HOST;
    $user = USER;
    $pass = PASS;
    $db_name = DB_NAME;

    $database = new mysqli($host,$user,$pass,$db_name);
    $id_proyek = $_GET['id_proyek'];
    $data = query("SELECT * from proyek WHERE id_proyek=$id_proyek")[0];
    // $result_set = $data->query($query);
?>

<div class="container mt-3">
  <div class="jumbotron bg-light" style="background:url('<?= BASEURL;?>/public/img/iot2.png') no-repeat center;size:cover;">
  <a href="../proyek.php">
      <button type="button" class="btn btn-primary btn-lg">
        <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
          <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
        </svg>
        Kembali
      </button>
    </a>
    <h1 class="display-4"><?= $data['namaProyek'];?></h1>
    <p class="lead"><?= $data['tanggal_proyek'];?></p>
    <hr class="my-4">
    <p><?= $data['deskripsiProyek'];?></p>
  </div>
</div>

<?php
  include_once('../../public/footer.php');
?>
