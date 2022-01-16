<?php
  include'../sistem/proses.php';
session_start();
    $nama = $_POST['nama'];
    $password  = $_POST['password'];
    $qw = $db->get("*","petugas","where nama='$nama' and password='$password'");
    $data=$qw->fetch();
    if($data['nama']==$nama and $data['password']==$password){
      
      $_SESSION['nama']=$data['nama'];
      $_SESSION['level']=$data['level'];
      $_SESSION['id_petugas']=$data['id_petugas'];
      echo"<script>alert('Login Berhasil')</script>";
      echo"<script>document.location.href='../index.php?p=home'</script>";
    }else{
      echo"<script>alert('Login Gagal')</script>";
      echo"<script>document.location.href='../login.php'</script>";
  }
?>
