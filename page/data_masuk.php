<?php
include 'sistem/proses.php';
?>

<section class="content-header">
      <h1>
        <b class=""> Data Surat Masuk</b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Surat Masuk</a></li>
        <li class="active">Data Surat Masuk</li>
      </ol>
</section>
    
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
    $qw=$db->get("*","surat_masuk");
  }elseif ($Cari!="") {
    $qw=$db->get("*","surat_masuk","WHERE no_agenda_masuk LIKE '%".$Cari."%' OR id_petugas_masuk LIKE'%".$Cari."%' OR no_surat_masuk LIKE '%".$Cari."%' OR tanggal_masuk_masuk LIKE '%".$Cari."%' OR asal_surat_masuk LIKE '%".$Cari."%'");
  }
  
}else{
  $qw=$db->get("*","surat_masuk","");
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
                  <th>No Agenda</th>
                  <th>ID Petugas</th>
                  <th>No Surat</th>
                  
                  <th>Tanggal Masuk</th>
                  <th>Asal Surat</th>
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
                    <td><?php echo$tampil['no_agenda_masuk']; ?></td>
                    <td><?php echo$tampil['id_petugas_masuk']; ?></td>
                    <td><?php echo$tampil['no_surat_masuk']; ?></td> 
                   
                    <td><?php echo$tampil['tanggal_masuk_masuk']; ?></td>
                    <td><?php echo$tampil['asal_surat_masuk']; ?></td>
                    <td><?php echo$tampil['perihal_masuk']; ?></td>
                    
                    <td>
                     <a href="?lihat=lihat&no_agenda_masuk=<?php echo $tampil['no_agenda_masuk']; ?>" class="btn btn-success btn-flat btn-sm"><i class="fa fa-eye" ></i></a> |
                    <a href="?lihat=form_surat_masuk&no_agenda_masuk=<?php echo $tampil['no_agenda_masuk'];?>" class="btn btn-success btn-flat btn-sm"><span class="fa fa-pencil"></span></a>|
                    <a href="proses/hapus_masuk.php?no_agenda_masuk=<?php echo $tampil['no_agenda_masuk']; ?>" class="btn btn-success btn-flat btn-sm"><i class="fa fa-trash"></i></a>
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
    <script type="text/javascript">
                            function cetak(){
        window.open('http://localhost/KartuKendali/page/cetak_kartu.php');
    }
</script>

    