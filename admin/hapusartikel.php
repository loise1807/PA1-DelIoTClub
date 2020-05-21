<?php
    require_once('functionadmin.php');
    $id_artikel = $_GET['id_artikel'];

    if(hapusartikel($id_artikel) > 0)
    {
      echo
  		"
  			<script>
  				alert('Artikel berhasil dihapus');
  				document.location.href = 'artikel.php';
  			</script>
  		";
    }else {
      echo
  		"
  			<script>
  				alert('Artikel gagal dihapus');
  				document.location.href = 'artikel.php';
  			</script>
  		";
    }
