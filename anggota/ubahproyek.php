<?php
  require_once('functionadmin.php');
  include_once('common/config.php');
  include_once('header.php');
  open_page('Ubah Proyek - Anggota');

  $id_proyek = $_GET['id_proyek'];
  // Query menampilkan sesuai id (detail)
  $data = query("SELECT * from proyek WHERE id_proyek=$id_proyek")[0];
  // lalu memakai input yg value nya sesuai database

  if(isset($_POST["submit"]))
  {

    if(ubahproyek($_POST) > 0)
    {
      echo
			"
				<script>
					alert('Berhasil diubah');
					document.location.href = 'proyek.php';
				</script>
			";
    }else{
      echo
			"
				<script>
					alert('Gagal diubah');
					document.location.href = 'proyek.php';
				</script>
			";
    }

  }
?>

<div class="container">
  <h1>Ubah Proyek</h1>
  <form class="" action="" method="post">
		<input type="hidden" name="id_proyek" value="<?php echo $data['id_proyek']; ?>">
    <div class="form-group">
      <label class="label-control" for="namaProyek">Topik Proyek  </label> <!--label pasangan for-->
      <ul class="list-group">
        <li class="list-group">
          <input class="form-control" type="text" name="namaProyek" id="namaProyek" required="required" value="<?php echo $data['namaProyek']; ?>">
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label class="label-control" for="deskripsiProyek">Deskripsi Proyek  </label> <!--label pasangan for-->
      <ul class="list-group">
        <li class="list-group">
          <input class="form-control" type="text" name="deskripsiProyek" id="deskripsiProyek" required="required" value="<?php echo $data['deskripsiProyek']; ?>">
        </li>
      </ul>
    </div>
    <button class="btn btn-primary mb-3" type="submit" name="submit">Submit</button>
    <a href="proyek.php">
      <button type="button" class="btn btn-primary mb-3">
        <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
          <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
        </svg>
        Kembali
      </button>
    </a>
  </form>
</div>
