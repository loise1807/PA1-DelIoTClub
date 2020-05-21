<?php

    function myquery($query)
  	{
  		global $db;
  		$result = mysqli_query($db,$query);
  		$rows = []; ///siapkan kotak untuk naruh baju analogi
  		while ($row = mysqli_fetch_assoc($result))
  		{
  			$rows[] = $row;
  		}
  		return $rows;
    }

    function register($data)
    {
      global $db;
      $nimPendaftar = htmlspecialchars($data["nimPendaftar"]);
      $namaPendaftar = htmlspecialchars($data["namaPendaftar"]);
      $prodiPendaftar = htmlspecialchars($data["prodiPendaftar"]);
      $angkatan = htmlspecialchars($data["angkatan"]);
      $motivasi = htmlspecialchars($data["motivasi"]);


      $query = "INSERT INTO pendaftaran VALUES
            ('','$nimPendaftar','$namaPendaftar','$prodiPendaftar','$angkatan','$motivasi')";
      mysqli_query($db,$query);
      //cek memasukkan data berhasil ditambahkan atau tidak
      return mysqli_affected_rows($db);
    }

    // if(isset($_POST["submit"]))
    // {
    //   if(register($_POST) > 0 )
    //   {
    //     echo
  	// 		"
  	// 			<script>
  	// 				alert('Selamat anda berhasil mendaftar. Tunggu pengumuman selanjutnya!');
  	// 				document.location.href = 'index.php';
  	// 			</script>
  	// 		";
    //   } else {
    //     echo
  	// 		"
  	// 			<script>
  	// 				alert('Maaf coba lagi!');
  	// 				document.location.href = 'index.php';
  	// 			</script>
  	// 		";
    //   }
    // }
?>
