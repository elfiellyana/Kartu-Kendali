<?php 
error_reporting(0);
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
    $sub="Edit";
    $nomat=$_GET['id_petugas'];
  }

  $query=$db->get('*','petugas',"WHERE id_petugas='$_GET[id_petugas]'");
  $lihat=$query->fetch();
 ?>

<div >
  <h2><?php echo $judul;?></h2>
</div>
<div class="panel-body">
  <div class="form">
    <form class="form-validase form-horizontal" method="POST" action="proses/simpan_petugas.php?aksi=<?php echo $sub; ?> ">
               <div class="form-group">
                  <label for="id_petugas" class="col-sm-2 control-label"> ID Petugas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_petugas" name="id_petugas"  value="<?php echo $nomat;?>"  >
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label"> Nama </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama"  value="<?php echo $lihat['nama'] ?>"  >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="password" class="col-sm-2 control-label"> Password </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $lihat['password'] ?>" >
                  </div>
                </div>
               
                <div class="form-group">
                  <label for="level" class="col-sm-2 control-label"> Level</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="level" value="<?php echo $lihat['level'] ?>">
                    <option>Admin</option>
                    <option>Petugas</option>
                    <option>Lain - Lain</option>
                  </select>
                  </div>
                </div>
                <input type="submit" name="<?php echo $sub;?>" class="btn btn-info pull-right" value="<?php echo $sub;?>">
                <input type="reset" name="kembali" class="btn btn-info2 pull-right" value="Kembali">
</form>
  </div>
</div>
