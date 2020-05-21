<?php
    require_once('functionadmin.php');
    include_once('common/config.php');
    include_once('header.php');
    if(isset($_POST["submit"]))
    {
      if(tambahartikel($_POST) > 0 )
      {
        echo
  			"
  				<script>
  					alert('Berhasil ditambahkan');
  					document.location.href = 'artikel.php';
  				</script>
  			";
      } else {
        echo
  			"
  				<script>
  					alert('Berhasil ditambahkan');
  					document.location.href = 'artikel.php';
  				</script>
  			";
      }
    }
?>

<?php
  include_once('header.php');
  open_page('Tambah Artikel - Anggota');
?>

<div class="container mt-2">
  <div class="bs-example">
      <h2 class="">Tambah Artikel</h2>
      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label class="control-label col-xs-3" for="topik">Topik Artikel</label>
            <input type="text" class="form-control" name="topik" id="topik" required="required">
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3" for="deskripsiArtikel">Deskripsi Artikel</label>
            <textarea rows="12" type="text" class="form-control" name="deskripsiArtikel" id="deskripsiArtikel" required="required"></textarea>
          </div>
          <!-- <div class="form-group">
            <label class="control-label col-xs-3" for="gambarPengumuman">Gambar : </label>
            <input type="file" class="form-control" name="gambarPengumuman">
          </div> -->
          <input type="hidden" class="form-control" name="tanggal_artikel" id="tanggal_artikel" required="required">
          <button class="btn btn-primary mb-3" type="submit" name="submit">Submit</button>
      </form>
  </div>
</div>
