<?php
	include"../system/ploses.php";
	$aksi=$_GET['aksi'];
	if($aksi=='Simpan'){
		$dua = $_FILES['file_surat']['tmp_name'];
		$fotobaru= date ('dmY').$_FILES['file_surat']['name'];
		$date=date('D-M-Y');
		if (!file_exists('../surat/surat_keuangan/'.$date)) {
		  mkdir('../surat/surat_keuangan/'.$date, true); 
		};
		$path="../surat/surat_keuangan/".$date."/".$fotobaru;
		if (move_uploaded_file($dua, $path)){
			$simpan=$db->insert("surat_keuangan","'$_POST[no_agenda]',
	 		'$_POST[id_petugas]',
	 		'$_POST[no_surat]', 
	 		'$_POST[tanggal_masuk]',
	 		'$_POST[tanggal_surat]',
	 		'$_POST[tanggal_penyelesaian]',
			'$_POST[perihal]',
			'$_POST[asal_surat]',
			'$_POST[untuk]',
			'$_POST[catatan]',
			'$fotobaru'");

			if ($simpan) {
		 		echo "<script>alert('Berhasil Di Simpan')</script>";
		 		echo "<script>document.location.href='../?lihat=data_keuangan'</script>";
		 	}else{
		 		echo "<script>alert('Gagal Di Simpan')</script>";
		 		echo "<script>document.location.href='../?lihat=form_surat_keuangan'</script>";
		 	}
		}
	}elseif($aksi=='Edit'){
		if (isset($_POST['cek_ubah'])) {
			$lihat=$db->get("*","surat_keuangan","WHERE no_agenda='$_POST[no_agenda]'");
			$data=$lihat->fetch();
			$date=date('D-M-Y');

			if (is_file('../surat/surat_keuangan/'.$date.'/'.$data['file_surat']))
			unlink('../surat/surat_keuangan/'.$date.'/'.$data['file_surat']);

			
			if (!file_exists('../surat/surat_keuangan/'.$date)) {
			  mkdir('../surat/surat_keuangan/'.$date, true); 
			};
			$dua = $_FILES['file_surat']['tmp_name'];
			$fotobaru= date ('dmY').$_FILES['file_surat']['name'];
			$path="../surat/surat_keuangan/".$date."/".$fotobaru;

			if (move_uploaded_file($dua, $path)){

				$simpan=$db->update("surat_keuangan","
				id_petugas='$_POST[id_petugas]',
				no_surat='$_POST[no_surat]',
				tanggal_masuk='$_POST[tanggal_masuk]',
				tanggal_surat='$_POST[tanggal_surat]',
				tanggal_penyelesaian='$_POST[tanggal_penyelesaian]',
				perihal='$_POST[perihal]',
				asal_surat='$_POST[asal_surat]',
				untuk='$_POST[untuk]',
				catatan='$_POST[catatan]',
				file_surat='$fotobaru'
				","no_agenda='$_POST[no_agenda]'");
				if($simpan){
					echo "<script>alert('Berhasil di Edit')</script>";
					echo "<script>document.location.href='../?lihat=data_keuangan'</script>";
				}else{
					echo "<script>alert('Gagal di edit dengan foto')</script>";
					
				}
			}
		}else{
			$simpan=$db->update("surat_keuangan",
				"
				id_petugas='$_POST[id_petugas]',
				no_surat='$_POST[no_surat]',
				tanggal_masuk='$_POST[tanggal_masuk]',
				tanggal_surat='$_POST[tanggal_surat]',
				tanggal_penyelesaian='$_POST[tanggal_penyelesaian]',
				perihal='$_POST[perihal]',
				asal_surat='$_POST[asal_surat]',
				untuk='$_POST[untuk]',
				catatan='$_POST[catatan]'
				","no_agenda='$_POST[no_agenda]'");
				if($simpan){
					echo "<script>alert('Berhasil di Edit')</script>";
					echo "<script>document.location.href='../?lihat=data_keuangan'</script>";
				}else{
					echo "<script>alert('Gagal di edit tanpa foto')</script>";
					
				}
		}
		
	}
?>