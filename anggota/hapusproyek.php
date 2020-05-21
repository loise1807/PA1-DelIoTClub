<?php
    require_once('functionadmin.php');
    $id_proyek = $_GET['id_proyek'];

    if(hapusproyek($id_proyek) > 0)
    {
      echo
  		"
  			<script>
  				alert('Proyek berhasil dihapus');
  				document.location.href = 'proyek.php';
  			</script>
  		";
    }else {
      echo
  		"
  			<script>
  				alert('Proyek gagal dihapus');
  				document.location.href = 'proyek.php';
  			</script>
  		";
    }
