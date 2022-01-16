<?php
include 'sistem/proses.php';
?>
 <section class="content-header">
      <h1>
        <b class=""> Data Surat Keluar</b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Surat Keluar</a></li>
        <li class="active">Data Surat Keluar</li>
      </ol>
</section>
    <?php

      $qw=$db->get("*","surat_keluar");
    
    ?>
    <form action="" method="POST" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="Cari_Surat" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <input type="submit" name="Cari" value="cari" class="btn btn-flat" id="search-btn" >
          </span>
        </div>
      </form>


<?php
error_reporting(0);
$Cari=$_POST['Cari_Surat'];
if($_POST['Cari']){
  if($Cari==""){
    $qw=$db->get("*","surat_keluar");
  }elseif ($Cari!="") {
    $qw=$db->get("*","surat_keluar","WHERE 
      nomor LIKE '%".$Cari."%' 
      OR id_petugas LIKE'%".$Cari."%' 
      OR no_surat LIKE '%".$Cari."%' 
      OR tanggal_surat LIKE '%".$Cari."%' 
      OR no_surat LIKE '%".$Cari."%'
      OR alamat LIKE '%".$Cari."%' 
      OR keterangan LIKE '%".$Cari."%'
      ");
  }
  
}else{
  $qw=$db->get("*","surat_keluar","");
}
?>



    <section class="content">
       <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Nomor</th>
                  <th>Kode</th>
                  <th>Alamat</th>
                  <th>Tanggal Surat</th>
                  <th>No Surat</th>
                  <th>Perihal</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                   foreach ($qw as $tampil) { ?>
                  <tr>
                    <td><?php echo$no++;?></td>
                    <td><?php echo$tampil['nomor']; ?></td>
                    <td><?php echo$tampil['kode']; ?></td>
                    <td><?php echo$tampil['alamat']; ?></td> 
                    <td><?php echo$tampil['tanggal_surat']; ?></td>
                    <td><?php echo$tampil['no_surat']; ?></td>
                    <td><?php echo$tampil['perihal']; ?></td>
              
                    <td>
                     <a href="?lihat=lihatkeluar&nomor=<?php echo $tampil['nomor']; ?>" class="btn btn-success btn-flat btn-sm"><i class="fa fa-eye" ></i></a> |
                    <a href="?lihat=form_surat_keluar&nomor=<?php echo $tampil['nomor'];?>" class="btn btn-success btn-flat btn-sm"><span class="fa fa-pencil"></span></a>
                    <a href="proses/hapus_keluar.php?nomor=<?php echo $tampil['nomor']; ?>" class="btn btn-success btn-flat btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    