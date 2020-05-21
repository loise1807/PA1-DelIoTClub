<?php
    require_once('functionadmin.php');
    $id_pengumuman = $_GET['id_pengumuman'];

    if(hapus($id_pengumuman) > 0)
    {
      echo
  		"
  			<script>
  				alert('Pengumuman berhasil dihapus');
  				document.location.href = 'pengumuman.php';
  			</script>
  		";
    }else {
      echo
  		"
  			<script>
  				alert('Pengumuman gagal dihapus');
  				document.location.href = 'pengumuman.php';
  			</script>
  		";
    }
