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

    // pengumuman

    function tambah($data)
  	{
  		global $db;
      date_default_timezone_set('Asia/Jakarta');
      $timestamp = date('Y-m-d G:i:s');
      // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
      $judulPengumuman = htmlspecialchars($data["judulPengumuman"]);
      // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
      $tanggal_pengumuman = $timestamp;
      // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
      $deskripsiPengumuman = htmlspecialchars($data["deskripsiPengumuman"]);

      //UPLOAD GAMBAR
  		$gambarPengumuman = upload();
  		if( !$gambarPengumuman )
  		{
  			return false;
  		}

  		$query = "INSERT INTO pengumuman VALUES
  					('','$tanggal_pengumuman','$judulPengumuman','$deskripsiPengumuman','$gambarPengumuman')";
  		mysqli_query($db,$query);
  		//cek memasukkan data berhasil ditambahkan atau tidak
  		return mysqli_affected_rows($db);
    }

    function upload()
    {
      $namafile = $_FILES['gambarPengumuman']['name'];
  		$ukuranfile = $_FILES['gambarPengumuman']['size'];
  		$error = $_FILES['gambarPengumuman']['error'];
  		$tmpName = $_FILES['gambarPengumuman']['tmp_name'];

      // cek gambar valid atau tidak

      if($error == 4) // 4 indikasi file kosong
      {
        echo "
        <script>
          alert('Gambar kosong! Silahkan upload ulang!');
          document.location.href = 'index.php'
        </script>";
        return false;
      }

      // cek ekstensi gambar
      $ekstensiGambarValid = ['jpg','jpeg','png'];
      //explode untuk memecah string menjadi array
  		$ekstensiGambar = explode('.', $namafile);
  		$ekstensiGambar = strtolower(end($ekstensiGambar));

      if(!in_array($ekstensiGambar, $ekstensiGambarValid))
      {
        echo "
        <script>
          alert('Harus ekstitensi image (jpg,png,jpeg)');
          document.location.href = 'pengumuman.php';
        </script>";
      }

      // cek besar file
      // if($ukuranfile > 1000000)
      // {
      //   echo "
      //   <script>
      //     alert('Size terlalu besar! max 1MB');
      //     document.location.href = 'pengumuman.php'
      //   </script>";
      // }

      // atur nama file tidak sama
      $namafilebaru = uniqid();
  		$namafilebaru .= '.';
  		$namafilebaru .= $ekstensiGambar;
      move_uploaded_file($tmpName, 'img/'. $namafilebaru);

  		return $namafilebaru;
    }

    function hapus($id_pengumuman)
    {
      global $db;
      $query = "DELETE FROM pengumuman where id_pengumuman = $id_pengumuman";
      mysqli_query($db,$query);

      return mysqli_affected_rows($db);
    }

    function ubah($data)
	{
		global $db;
		$id_pengumuman = ($data["id_pengumuman"]);
		$judulPengumuman = htmlspecialchars($data["judulPengumuman"]); // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
		$deskripsiPengumuman = htmlspecialchars($data["deskripsiPengumuman"]); // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
		$gambarLama = htmlspecialchars($data['gambarLama']);
		if ($_FILES['gambarPengumuman']['error'] === 4) //jika dia tidak upload gambar baru
		{
			$gambarPengumuman = $gambarLama;
		}
		else
		{
			$gambarPengumuman=upload();
		}

		$query = "	UPDATE pengumuman SET
					judulPengumuman = '$judulPengumuman',
					deskripsiPengumuman = '$deskripsiPengumuman',
					gambarPengumuman = '$gambarPengumuman'
					WHERE id_pengumuman = $id_pengumuman
				 ";

		mysqli_query($db,$query);
		//cek memasukkan data berhasil ditambahkan atau tidak
		return mysqli_affected_rows($db);
	}

  // Artikel

  function tambahartikel($data)
  {
    global $db;
    date_default_timezone_set('Asia/Jakarta');
    $timestamp = date('Y-m-d G:i:s');
    // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
    $topik = htmlspecialchars($data["topik"]);
    // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
    $tanggal_artikel = $timestamp;
    // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
    $deskripsiArtikel = htmlspecialchars($data["deskripsiArtikel"]);


    $query = "INSERT INTO artikel VALUES
          ('','$tanggal_artikel','$topik','$deskripsiArtikel')";
    mysqli_query($db,$query);
    //cek memasukkan data berhasil ditambahkan atau tidak
    return mysqli_affected_rows($db);
  }

  function hapusartikel($id_artikel)
  {
    global $db;
    $query = "DELETE FROM artikel where id_artikel = $id_artikel";
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
  }

  function ubahartikel($data)
  {
    global $db;
    $id_artikel = ($data["id_artikel"]);
    $topik = htmlspecialchars($data["topik"]); // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
    $deskripsiArtikel = htmlspecialchars($data["deskripsiArtikel"]); // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input


    $query = "	UPDATE artikel SET
          topik = '$topik',
          deskripsiArtikel = '$deskripsiArtikel'
          WHERE id_artikel = $id_artikel
         ";

    mysqli_query($db,$query);
    //cek memasukkan data berhasil ditambahkan atau tidak
    return mysqli_affected_rows($db);
  }

  // Proyek

  function tambahproyek($data)
  {
    global $db;
    date_default_timezone_set('Asia/Jakarta');
    $timestamp = date('Y-m-d G:i:s');
    // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
    $namaProyek = htmlspecialchars($data["namaProyek"]);
    // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
    $tanggal_proyek = $timestamp;
    // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
    $deskripsiProyek = htmlspecialchars($data["deskripsiProyek"]);


    $query = "INSERT INTO proyek VALUES
          ('','$tanggal_proyek','$namaProyek','$deskripsiProyek')";
    mysqli_query($db,$query);
    //cek memasukkan data berhasil ditambahkan atau tidak
    return mysqli_affected_rows($db);
  }

  function hapusproyek($id_proyek)
  {
    global $db;
    $query = "DELETE FROM proyek where id_proyek = $id_proyek";
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
  }

  function ubahproyek($data)
  {
    global $db;
    $id_proyek = ($data["id_proyek"]);
    $namaProyek = htmlspecialchars($data["namaProyek"]); // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input
    $deskripsiProyek = htmlspecialchars($data["deskripsiProyek"]); // html special char berfungsi untuk mengamankan agar tag dan script html tidak dapat di input


    $query = "	UPDATE proyek SET
          namaProyek = '$namaProyek',
          deskripsiProyek = '$deskripsiProyek'
          WHERE id_proyek = $id_proyek
         ";

    mysqli_query($db,$query);
    //cek memasukkan data berhasil ditambahkan atau tidak
    return mysqli_affected_rows($db);
  }

?>
