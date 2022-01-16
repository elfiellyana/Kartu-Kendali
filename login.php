
<!DOCTYPE html>
<html>
<head>
    <title>Kartu Kendali | Login</title>
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
            Login
        </div>

        <div class="login-box-body">
          <p class="login-box-msg"><a href="register.php">  Register </a></p>
    
    <form action="proses/proses_login.php" method="post" onsubmit="return validasi()">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama" name="nama">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Sign In</button>
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