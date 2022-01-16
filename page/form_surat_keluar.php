<?php
error_reporting(0);
	include"sistem/proses.php";
	if(empty($_GET['nomor'])){
	$qw=$db->get('*','surat_keluar','ORDER BY nomor DESC');
	$tampil=$qw->fetch();
	$id=$tampil['nomor'];
	$ambil=substr($id,3,5);
$jml=$ambil+1;
	if($jml < 10){
		$nomot="PTGS001".$jml;
	}elseif($jml > 9 && $jml <=99){
		$nomot="PTGS".$jml;
	}else{
		$nomot="PTGS".$jml;
	}
	$judul="Form Input Surat Keluar";
	$sub="Simpan";
  $show='hidden';
}else{$judul="Form Edit Data Surat Keluar";
	$sub="Edit";
	$nomot=$_GET['nomor'];
  $file_surat=$_GET['file_surat'];
  $show='';
}
$query=$db->get('*','surat_keluar',"where nomor='$_GET[nomor]'");
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
    <form class="form-validase form-horizontal" method="POST" action="proses/simpan_keluar.php?aksi=<?php echo $sub; ?> " enctype="multipart/form-data">

               <div class="form-group">
                  <label for="id_petugas" class="col-sm-2 control-label"> ID Petugas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_petugas" name="id_petugas"  value="<?php echo $_SESSION['id_petugas']?>"  >
                  </div>
                </div>

                <div class="form-group">
                  <label for="nomor" class="col-sm-2 control-label"> Nomor</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nomor" name="nomor" value="<?php echo $lihat['nomor'];?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="kode" class="col-sm-2 control-label"> Kode</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode" value="<?php echo $lihat['kode']; ?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label"> Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $lihat['alamat'] ?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="tanggal_surat" class="col-sm-2 control-label"> Tanggal Surat</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" value="<?php echo $lihat['tanggal_surat']; ?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="no_surato" class="col-sm-2 control-label"> Nomor Surat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_surat" name="no_surat" value="<?php echo $lihat['no_surat']; ?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="perihal" class="col-sm-2 control-label"> Perihal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal" value="<?php echo $lihat['perihal']; ?>" >
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="keterangan" class="col-sm-2 control-label"> Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="keterangan" value="<?php echo $lihat['keterangan']; ?>" >
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="file_surat" class="col-sm-2 control-label"> File Surat</label>
                  <div class="col-sm-10">
                    <input type="checkbox" <?php echo $show; ?> name="cek_ubah" style="margin-right: 20px"><span <?php echo $show; ?>>Ceklis jika ingin mengubah</span>
                     <input type="file" id="file_surat" name="file_surat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="file_surat" class="col-md-2"></label>
                  <div class="col-md-4">
                    <input type="text" name="file_surat" class="form-control" readonly id="file_surat" value="<?php echo $lihat['file_surat']; ?>">
                </div>
            </div>
                <button class="btn btn-primary" type="submit" name="<?php echo $sub;?>" id="simpan"><?php echo $sub; ?></button>
                <a href="?lihat=data_keluar"><button class="btn btn-default" type="button" name="batal" id="batal">Cancel</button></a>
</form>
</div>
</div>
    </section>
  </div>
</div>