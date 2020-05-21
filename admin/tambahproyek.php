<?php
    require_once('functionadmin.php');
    include_once('common/config.php');
    include_once('header.php');
    
    if(isset($_POST["submit"]))
    {
      if(tambahproyek($_POST) > 0 )
      {
        echo
  			"
  				<script>
  					alert('Berhasil ditambahkan');
  					document.location.href = 'proyek.php';
  				</script>
  			";
      } else {
        echo
  			"
  				<script>
  					alert('Berhasil ditambahkan');
  					document.location.href = 'proyek.php';
  				</script>
  			";
      }
    }
?>

<?php
  include_once('header.php');
  open_page('Tambah Proyek - Admin');
?>

<div class="container mt-2">
  <div class="bs-example">
      <h2 class="">Tambah Proyek</h2>
      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label class="control-label col-xs-3" for="namaProyek">Nama Proyek</label>
            <input type="text" class="form-control" name="namaProyek" id="namaProyek" required="required">
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3" for="deskripsiProyek">Deskripsi Proyek</label>
            <textarea rows="12" type="text" class="form-control" name="deskripsiProyek" id="deskripsiProyek" required="required"></textarea>
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
