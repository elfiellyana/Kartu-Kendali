<?php 
 
  include "sistem/proses.php";
  if (empty($_GET['id_petugas'])) { 
    $qw=$db->get('*','petugas','ORDER BY id_petugas DESC');
    $tampil=$qw->fetch();
    $id=$tampil['id_petugas'];
    $ambil=substr($id, 3,5);
    $jml=$ambil+1;
    if ($jml< 10) {
      $nomat ="PTG00".$jml;
    }elseif ($jml>9 && $jml<=99) {
      $nomat="PTG00".$jml;
    }else{
      $nomat="PTG00".$jml;
    }
    $judul="Input Petugas";
    $sub="Simpan";
  }else{
    $judul="Edit Petugas";
    $sub="edit";
    $nomat=$_GET['id_petugas'];
  }

  $query=$db->get('*','petugas',"WHERE id_petugas='$_GET[id_petugas]'");
  $lihat=$query->fetch();
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Kartu Kendali | Register</title>
  <link rel="stylesheet" href="aset/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="aset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="aset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="aset/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="aset/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="aset/plugins/iCheck/square/blue.css">
  <script src="aset/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="aset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="aset/plugins/iCheck/icheck.min.js"></script>


</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            Register
        </div>

        <div class="login-box-body">
   
    <form  method="POST" action="proses/simpan_petugas.php?aksi=<?php echo $sub; ?> " >
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="ID Petugas" name="id_petugas" value="<?php echo $nomat ;?>">
        
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="password" name="password" id="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="level" name="level" value="Admin">
        
      </div>
      
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" name="<?php echo $sub;?>" class="btn btn-primary btn-block btn-flat" value="<?php echo $sub;?>" >
        </div>

        <div class="col-xs-4">
          <a href="login.php"><button class="btn btn-default" type="button" name="batal" id="batal">Batal</button></a>
          
        </div>
        <!-- /.col -->
      </div>
      
      
    </form>
  </div>
    </div> 

    <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  function validasi() {
    var nama = document.getElementById("nama").value;
    var password = document.getElementById("password").value;
    if (username != "" && password !="") {
      return true;
    }else{
      alert('Nama dan Password harus diisi !')
      return false;
    }
  }
</script>
</body>
</html>