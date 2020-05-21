<?php
  require_once('functionadmin.php');
  include_once('common/config.php');
  include_once('header.php');
  open_page('Ubah Pengumuman - Admin');

  $koneksi = mysqli_connect("localhost","root","","del_iot_club");

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_pengumuman'])) {
    // ambil nilai id_pengumuman dari url dan disimpan dalam variabel $id_pengumuman
    $id_pengumuman = ($_GET["id_pengumuman"]);

    // menampilkan data dari database yang mempunyai id_pengumuman=$id_pengumuman
    $query = "SELECT * FROM pengumuman WHERE id_pengumuman='$id_pengumuman'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='pengumuman.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke pengumuman.php
    echo "<script>alert('Masukkan data id.');window.location='pengumuman.php';</script>";
  }


  // if(isset($_GET['id_pengumuman']))
  // {
  //   $id_pengumuman = $_GET['id_pengumuman'];
  // }
  // // Query menampilkan sesuai id (detail)
  // $query = query("SELECT * FROM pengumuman WHERE id_pengumuman=$id_pengumuman")[0];
  // // lalu memakai input yg value nya sesuai database
  //
  // $result = mysqli_query($koneksi, $query);
  // if(!$result){
  //   die("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
  // }
  //
  // $data = mysqli_fetch_assoc($result);
  //
  // if (!count($data)) {
  //    echo "<script>alert('Data tidak ditemukan pada database');window.location='pengumuman.php';</script>";
  // }
  //  else {
  //   // apabila tidak ada data GET id pada akan di redirect ke pengumuman.php
  //   echo "<script>alert('Masukkan data id.');window.location='pengumuman.php';</script>";
  // }

  // if(isset($_POST["submit"]))
  // {
  //
  //   if(ubah($_POST) > 0)
  //   {
  //     echo
	// 		"
	// 			<script>
	// 				alert('Berhasil diubah');
	// 				document.location.href = 'pengumuman.php';
	// 			</script>
	// 		";
  //   }else{
  //     echo
	// 		"
	// 			<script>
	// 				alert('Gagal diubah');
	// 				document.location.href = 'pengumuman.php';
	// 			</script>
	// 		";
  //   }
  //
  // }
?>
<div class="container">
  <h1>Ubah pengumuman</h1>
  <form class="" action="proses_ubah_pengumuman.php" method="POST" enctype="multipart/form-data">
    <input name="id_pengumuman" value="<?php echo $data['id_pengumuman']; ?>"  hidden />
    <div class="form-group">
      <label class="label-control" for="judulPengumuman">Judul Pengumuman  </label> <!--label pasangan for-->
      <ul class="list-group">
        <li class="list-group">
          <input class="form-control" type="text" name="judulPengumuman" id="judulPengumuman" required="required" value="<?php echo $data['judulPengumuman']; ?>">
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label class="label-control" for="deskripsiPengumuman">Deskripsi Pengumuman  </label> <!--label pasangan for-->
      <ul class="list-group">
        <li class="list-group">
          <input class="form-control" type="text" name="deskripsiPengumuman" id="deskripsiPengumuman" required="required" value="<?php echo $data['deskripsiPengumuman']; ?>">
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label class="label-control">Gambar Pengumuman  </label> <!--label pasangan for-->
      <ul class="list-group">
        <li class="list-group">
          <img src="img/<?php echo $data['gambarPengumuman']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambarPengumuman" />
        </li>
      </ul>
    </div>
    <button class="btn btn-primary mb-3" type="submit">Submit</button>
    <a href="pengumuman.php">
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
