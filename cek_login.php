<?php

include 'common/dbconfig.php';

// hasil post logn.php
$username = $_POST['username'];
$password = $_POST['password'];

// mengatur akun dengan username yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM akun WHERE username='$username' and password='$password'");
// menyesuaikan sesuai row
$cek = mysqli_num_rows($login);

// cek apakah username ada atau tidak

if($cek > 0) {

  $data = mysqli_fetch_assoc($login);

  // cek jika akun Admin
  if($data['role']=="admin") {

    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "admin";

    // alihkan ke halaman dashboard admin
    header("location:admin/index.php");

  // cek jika akun anggota
  }else if($data['role']=="anggota") {

    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "anggota";

    // alihkan ke halaman dashboard anggota
    header("location:anggota/index.php");

    // jika akun guest
  }else{
    // alihkan ke halaman login kembali
    header("location:login.php?pesan=gagal");
  }

}else{
  header("location:login.php?pesan=gagal");
}
