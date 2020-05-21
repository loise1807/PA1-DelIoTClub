<?php

    function get_title($_title){
        return('<title>' . $_title . '</title>');
    }

    function open_page($_title){
        echo('<html><head>' . get_title($_title) . '</head></head><body>');
    }

    function close_page(){
        echo('</body></html>');
    }

    function redirect($_location){
        header('Location : ' . $_location);
    }

    $db = mysqli_connect("localhost","root","","del_iot_club");

    function query($query)
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

    // function tambah($data)
  	// {
  	// 	global $db;
    //   date_default_timezone_set('Asia/Jakarta');
    //   $timestamp = date('Y-m-d G:i:s');
    //   // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
    //   $judulPengumuman = htmlspecialchars($data["judulPengumuman"]);
    //   // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
    //   $tanggal_pengumuman = $timestamp;
    //   // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
    //   $deskripsiPengumuman = htmlspecialchars($data["deskripsiPengumuman"]);
    //
    //   //UPLOAD GAMBAR
  	// 	$gambarPengumuman = upload();
  	// 	if( !$gambarPengumuman )
  	// 	{
  	// 		return false;
  	// 	}
    //
  	// 	$query = "INSERT INTO pengumuman VALUES
  	// 				('','$tanggal_pengumuman','$judulPengumuman','$deskripsiPengumuman','$gambarPengumuman')";
  	// 	mysqli_query($db,$query);
  	// 	//cek memasukkan data berhasil ditambahkan atau tidak
  	// 	return mysqli_affected_rows($db);
    // }
    //
    // function upload()
    // {
    //   $namafile = $_FILES['gambarPengumuman']['name'];
  	// 	$ukuranfile = $_FILES['gambarPengumuman']['size'];
  	// 	$error = $_FILES['gambarPengumuman']['error'];
  	// 	$tmpName = $_FILES['gambarPengumuman']['tmp_name'];
    //
    //   // cek gambar valid atau tidak
    //
    //   if($error == 4) // 4 indikasi file kosong
    //   {
    //     echo "
    //     <script>
    //       alert('Gambar kosong! Silahkan upload ulang!');
    //       document.location.href = 'index.php'
    //     </script>";
    //     return false;
    //   }
    //
    //   // cek ekstensi gambar
    //   $ekstensiGambarValid = ['jpg','jpeg','png'];
    //   //explode untuk memecah string menjadi array
  	// 	$ekstensiGambar = explode('.', $namafile);
  	// 	$ekstensiGambar = strtolower(end($ekstensiGambar));
    //
    //   if(!in_array($ekstensiGambar, $ekstensiGambarValid))
    //   {
    //     echo "
    //     <script>
    //       alert('Harus ekstitensi image (jpg,png,jpeg)');
    //       document.location.href = 'pengumuman.php';
    //     </script>";
    //   }
    //
    //   // cek besar file
    //   if($ukuranfile > 1000000)
    //   {
    //     echo "
    //     <script>
    //       alert('Size terlalu besar! max 1MB');
    //       document.location.href = 'pengumuman.php'
    //     </script>";
    //   }
    //
    //   // atur nama file tidak sama
    //   $namafilebaru = uniqid();
  	// 	$namafilebaru .= '.';
  	// 	$namafilebaru .= $ekstensiGambar;
    //   move_uploaded_file($tmpName, 'img/'. $namafilebaru);
    //
  	// 	return $namafilebaru;
    // }

?>
