<?php

  $koneksi = mysqli_connect("localhost","root","","del_iot_club");

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }

  // membuat variabel penampung
  $id_pengumuman = $_POST['id_pengumuman'];
  $judulPengumuman=$_POST['judulPengumuman'];
  $deskripsiPengumuman=$_POST['deskripsiPengumuman'];
  $gambarPengumuman=$_FILES['gambarPengumuman']['name'];

  // di cek terlebih dahulu jika ingin merubah gambar pengumuman
  if($gambarPengumuman != ""){
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $x = explode('.',$gambarPengumuman); // memisahkan nama gambar
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambarPengumuman']['tmp_name'];
    $angka_acak = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambarPengumuman; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) == true) {
      move_uploaded_file($file_tmp,'img/'.$nama_gambar_baru);

      // buat query update berdasarkan id_pengumuman yang ingin di ubah
      $query = "UPDATE pengumuman SET judulPengumuman = '$judulPengumuman', deskripsiPengumuman = '$deskripsiPengumuman', gambarPengumuman = '$nama_gambar_baru' WHERE id_pengumuman = '$id_pengumuman'";
      // $query .= "WHERE id_pengum = '$id_pengumuman'";
      $result = mysqli_query($koneksi,$query);
      //periksa apakah ada error di query
      if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil diubah.');window.location='pengumuman.php';</script>";
      }
  } else {
   //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png atau jpeg.');window.location='pengumuman.php';</script>";
  }
}else{
  // jalankan QUery update berdasarkan id_pengumuman
  $query = "UPDATE pengumuman SET judulPengumuman = '$judulPengumuman', deskripsiPengumuman = '$deskripsiPengumuman' WHERE id_pengumuman = '$id_pengumuman'";
  // $query .= "WHERE id_pengumuman = '$id_pengumuman'";
  $result = mysqli_query($koneksi,$query);
  // periksa error;
  if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    } else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Data berhasil diubah.');window.location='pengumuman.php';</script>";
    }
}
