<?php
	include"../sistem/proses.php";
	$aksi=$_GET['aksi'];
	if($aksi=='Simpan'){
		$dua = $_FILES['file_surat']['tmp_name'];
		$fotobaru= date ('dmY').$_FILES['file_surat']['name'];
		$date=date('D-M-Y');
		if (!file_exists('../surat/surat_keluar/'.$date)) {
		  mkdir('../surat/surat_keluar/'.$date, true); 
		};
		$path="../surat/surat_keluar/".$date."/".$fotobaru;
		if (move_uploaded_file($dua, $path)){
			$simpan=$db->insert("surat_keluar","'$_POST[id_petugas]',
	 		'$_POST[tanggal_surat]',
	 		'$_POST[no_surat]',
	 		'$_POST[perihal]',
	 		'$_POST[keterangan]',
	 		'$_POST[alamat]',
	 		'$_POST[nomor]',
			'$_POST[kode]',
			'$fotobaru',
			'$date'");

			if ($simpan) {
		 		echo "<script>alert('Berhasil Di Simpan')</script>";
		 		echo "<script>document.location.href='../?lihat=data_keluar'</script>";
		 	}else{
		 		echo "<script>alert('Gagal Di Simpan')</script>";
		 		echo "<script>document.location.href='../?lihat=form_surat_keluar'</script>";
		 	}
		}
	}elseif($aksi=='Edit'){
		if (isset($_POST['cek_ubah'])) {
			$lihat=$db->get("*","surat_keluar","WHERE nomor='$_POST[nomor]'");
			$data=$lihat->fetch();
			$date=date('D-M-Y');

			if (is_file('../surat/surat_keluar/'.$date.'/'.$data['file_surat']))
			unlink('../surat/surat_keluar/'.$date.'/'.$data['file_surat']);

			
			if (!file_exists('../surat/surat_keluar/'.$date)) {
			  mkdir('../surat/surat_keluar/'.$date, true); 
			};
			$dua = $_FILES['file_surat']['tmp_name'];
			$fotobaru= date ('dmY').$_FILES['file_surat']['name'];
			$path="../surat/surat_keluar/".$date."/".$fotobaru;

			if (move_uploaded_file($dua, $path)){

				$simpan=$db->update("surat_keluar","
				id_petugas='$_POST[id_petugas]',
				tanggal_surat='$_POST[tanggal_surat]',
				no_surat='$_POST[no_surat]',
				perihal='$_POST[perihal]',
				keterangan='$_POST[keterangan]',
				alamat='$_POST[alamat]',
				kode='$_POST[kode]',
				file_surat='$fotobaru'
				","nomor='$_POST[nomor]'");
				if($simpan){
					echo "<script>alert('Berhasil di Edit')</script>";
					echo "<script>document.location.href='../?lihat=data_keluar'</script>";
				}else{
					echo "<script>alert('Gagal di edit dengan foto')</script>";
					
				}
			}
		}else{
			$simpan=$db->update("surat_keluar","
				id_petugas='$_POST[id_petugas]',
				tanggal_surat='$_POST[tanggal_surat]',
				no_surat='$_POST[no_surat]',
				perihal='$_POST[perihal]',
				keterangan='$_POST[keterangan]',
				alamat='$_POST[alamat]',
				kode='$_POST[kode]'
				","nomor='$_POST[nomor]'");
				if($simpan){
					echo "<script>alert('Berhasil di Edit')</script>";
					echo "<script>document.location.href='../?lihat=data_keluar'</script>";
				}else{
					echo "<script>alert('Gagal di edit tanpa foto')</script>";
					
				}
		}
		
	}
?>