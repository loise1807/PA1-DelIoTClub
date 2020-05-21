<?php
    require_once('functionadmin.php');
    include_once('common/config.php');
    include_once('header.php');
    if(isset($_POST["submit"]))
    {
      if(tambah($_POST) > 0 )
      {
        echo
  			"
  				<script>
  					alert('Berhasil ditambahkan');
  					document.location.href = 'pengumuman.php';
  				</script>
  			";
      } else {
        echo
  			"
  				<script>
  					alert('Berhasil ditambahkan');
  					document.location.href = 'pengumuman.php';
  				</script>
  			";
      }
    }
?>

<?php
  include_once('header.php');
  open_page('Tambah Pengumuman - Admin');
?>

<div class="container mt-2">
  <div class="bs-example">
      <h2 class="">Tambah Pengumuman</h2>
      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label class="control-label col-xs-3" for="judulPengumuman">Judul Pengumuman : </label>
            <input type="text" class="form-control" name="judulPengumuman" id="judulPengumuman" required="required">
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3" for="deskripsiPengumuman">Deskripsi Pengumuman : </label>
            <textarea rows="12" type="text" class="form-control" name="deskripsiPengumuman" id="deskripsiPengumuman" required="required"></textarea>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3" for="gambarPengumuman">Gambar : </label>
            <input type="file" class="form-control" name="gambarPengumuman" >
          </div>
          <input type="hidden" class="form-control" name="tanggal_pengumuman" id="tanggal_pengumuman" required="required">
          <button class="btn btn-primary mb-3" type="submit" name="submit">Submit</button>
      </form>
  </div>
</div>
