<?php
	error_reporting(0);
	include"sistem/proses.php";
	if(empty($_GET['no_agenda_masuk'])){
	$qw=$db->get('*','surat_masuk','ORDER BY no_agenda_masuk DESC');
	$tampil=$qw->fetch();
	$id=$tampil['no_agenda_masuk'];
	$ambil=substr($id,3,5);
$jml=$ambil+1;
	if($jml < 10){
		$nomot="PTGS001".$jml;
	}elseif($jml > 9 && $jml <=99){
		$nomot="PTGS".$jml;
	}else{
		$nomot="PTGS".$jml;
	}
	$judul="Form Input Surat Masuk";
	$sub="Simpan";
  $show='hidden';
}else{$judul="Form Edit Data Surat Masuk";
	$sub="Edit";
	$nomot=$_GET['no_agenda_masuk'];
  $file_surat=$_GET['file_surat_masuk'];
  $show='';
}
$query=$db->get('*','surat_masuk',"where no_agenda_masuk='$_GET[no_agenda_masuk]'");
$lihat=$query->fetch();
?>

<section class="content-header">
      <h1>
        <div class=""> <b><?php echo $judul;?></b></div>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?lihat=home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $judul;?></li>
      </ol>
</section>

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      

      <div class="panel-body">
        <div class="form">
          <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="proses/simpan_masuk.php?aksi=<?php echo $sub; ?> " enctype="multipart/form-data">
            <div class="form-group">
              <label for="no_agenda_masuk" class="col-md-2">No Agenda</label>
                <div class="col-md-4">
                  <input type="text" name="no_agenda_masuk" class="form-control" id="no_agenda_masuk" value="<?php echo $lihat['no_agenda_masuk'];?>" placeholder=" No Agenda " >
                </div>
            </div>

            <div class="form-group">
              <label for="id_petugas_masuk" class="col-md-2">ID Petugas</label>
                <div class="col-md-4">
                  <input type="text" name="id_petugas_masuk" class="form-control" id="id_petugas_masuk" value="<?php echo $_SESSION['id_petugas']?>" >
                </div>
            </div>

            <div class="form-group">
              <label for="no_surat_masuk" class="col-md-2">Nomor Surat</label>
                <div class="col-md-4">
                  <input type="text" name="no_surat_masuk" class="form-control" id="no_surat_masuk" value="<?php echo $lihat['no_surat_masuk'];?>" placeholder=" Nomor Surat ">
                </div>
            </div>

            <div class="form-group">
              <label for="tanggal_masuk_masuk" class="col-md-2">Tanggal Masuk</label>
                <div class="col-md-4">
                  <input type="text" name="tanggal_masuk_masuk" class="form-control" id="tanggal_masuk_masuk" value="<?php echo date('Y-m-d');?>">
                </div>
            </div>

            <div class="form-group">
              <label for="tanggal_penyelesaian_masuk" class="col-md-2">Tanggal Penyelesaian</label>
                <div class="col-md-4">
                  <input type="text" name="tanggal_penyelesaian_masuk" class="form-control" id="tanggal_penyelesaian_masuk" value="<?php echo $lihat['tanggal_penyelesaian_masuk'];?>">
                </div>
            </div>

            <div class="form-group">
              <label for="tanggal_surat_masuk" class="col-md-2">Tanggal Surat</label>
                <div class="col-md-4">
                  <input type="date" name="tanggal_surat_masuk" class="form-control" id="tanggal_surat_masuk" value="<?php echo $lihat['tanggal_surat_masuk'];?>">
                </div>
            </div>

            <div class="form-group">
              <label for="perihal_masuk" class="col-md-2">Perihal</label>
                <div class="col-md-4">
                  <input type="text" name="perihal_masuk" class="form-control"  id="perihal_masuk" value=" <?php echo $lihat['perihal_masuk'];?>" placeholder=" Perihal">
                </div>
            </div>

            <div class="form-group">
              <label for="asal_surat_masuk" class="col-md-2">Asal Surat</label>
                <div class="col-md-4">
                  <input type="text" name="asal_surat_masuk" class="form-control" id="asal_surat_masuk" value="<?php echo $lihat['asal_surat_masuk'];?>" placeholder=" Asal Surat">
                </div>
            </div>

            <div class="form-group">
              <label for="catatan_masuk" class="col-md-2">Catatan</label>
                <div class="col-md-4">
                  <input type="text" name="catatan_masuk" class="form-control" id="catatan_masuk" value="<?php echo $lihat['catatan_masuk'];?>" placeholder=" Catatan">
                </div>
            </div>

            <div class="form-group">
              <label for="untuk_masuk" class="col-md-2">Untuk</label>
                <div class="col-md-4">
                  <input type="text" name="untuk_masuk" class="form-control" id="untuk_masuk" value="<?php echo $lihat['untuk_masuk'];?>" placeholder=" Untuk">
                </div>
            </div>

            <div class="form-group">
              <label for="file_surat_masuk" class="col-md-2">File Surat</label>
                <div class="col-md-4">
                   <input type="checkbox" <?php echo $show; ?> name="cek_ubah" style="margin-right: 20px"><span <?php echo $show; ?>>Ceklis jika ingin mengubah</span>
                  <input type="file" name="file_surat_masuk" class="form-control" id="file_surat_masuk"  >
                </div>
                
            </div>
            <div class="form-group">
                <label for="file_surat_masuk" class="col-md-2"></label>
                <div class="col-md-4">
                 
                  <input type="text" name="file_surat_masuk" class="form-control" readonly id="file_surat_masuk" value="<?php echo $lihat['file_surat_masuk'];?>">
                </div>
            </div>

            <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="<?php echo $sub;?>" id="simpan"><?php echo $sub; ?></button>
                        <a href="?lihat=data_masuk"><button class="btn btn-default" type="button" name="batal" id="batal">Cancel</button></a>
                      </div>
                    </div>

          </form>
        </div>
      </div>
    </section>
  </div>
</div>