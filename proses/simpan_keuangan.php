<?php
	include"../sistem/proses.php";
	$aksi=$_GET['aksi'];
	if($aksi=='Simpan'){
		$dua = $_FILES['file_surat_keuangan']['tmp_name'];
		$fotobaru= date ('dmY').$_FILES['file_surat_keuangan']['name'];
		$date=date('D-M-Y');
		if (!file_exists('../surat/surat_keuangan/'.$date)) {
		  mkdir('../surat/surat_keuangan/'.$date, true);
		}else{
			echo "sudah ada foldernya";
		}
		  $path="../surat/surat_keuangan/".$date."/".$fotobaru;
		if (move_uploaded_file($dua, $path)){
			$simpan=$db->insert("surat_keuangan","'$_POST[no_agenda_keuangan]',
	 		'$_POST[id_petugas_keuangan]',
	 		'$_POST[no_surat_keuangan]', 
	 		'$_POST[tanggal_masuk_keuangan]',
	 		'$_POST[tanggal_surat_keuangan]',
	 		'$_POST[tanggal_penyelesaian_keuangan]',
			'$_POST[perihal_keuangan]',
			'$_POST[asal_surat_keuangan]',
			'$_POST[untuk_keuangan]',
			'$_POST[catatan_keuangan]',
			'$fotobaru',
			'$date'");

			if ($simpan) {
		 		echo "<script>alert('Berhasil Di Simpan')</script>";
		 		echo "<script>document.location.href='../?lihat=data_keuangan'</script>";
		 	}else{
		 		echo "<script>alert('Gagal Di Simpan')</script>";
		 		echo "<script>document.location.href='../?lihat=form_surat_keuangan'</script>";
		 	}
		}else{
			echo "<script>alert('Gagal Upload')</script>";
		 		echo "<script>document.location.href='../?lihat=form_surat_keuangan'</script>";
		} 
		
	}elseif($aksi=='Edit'){
		if (isset($_POST['aksi'])) {
			$lihat=$db->get("*","surat_keuangan","WHERE no_agenda_keuangan='$_POST[no_agenda_keuangan]'");
			$data=$lihat->fetch();
			$date=date('D-M-Y');

			if (is_file('../surat/surat_keuangan/'.$date.'/'.$data['file_surat_keuangan']))
			unlink('../surat/surat_keuangan/'.$date.'/'.$data['file_surat_keuangan']);

			
			if (!file_exists('../surat/surat_keuangan/'.$date)) {
			  mkdir('../surat/surat_keuangan/'.$date, true); 
			};
			$dua = $_FILES['file_surat_keuangan']['tmp_name'];
			$fotobaru= date ('dmY').$_FILES['file_surat_keuangan']['name'];
			$path="../surat/surat_keuangan/".$date."/".$fotobaru;

			if (move_uploaded_file($dua, $path)){

				$simpan=$db->update("surat_keuangan","
				id_petugas_keuangan='$_POST[id_petugas_keuangan]',
				no_surat_keuangan='$_POST[no_surat_keuangan]',
				tanggal_masuk_keuangan='$_POST[tanggal_masuk_keuangan]',
				tanggal_surat_keuangan='$_POST[tanggal_surat_keuangan]',
				tanggal_penyelesaian_keuangan='$_POST[tanggal_penyelesaian_keuangan]',
				perihal_keuangan='$_POST[perihal_keuangan]',
				asal_surat_keuangan='$_POST[asal_surat_keuangan]',
				untuk_keuangan='$_POST[untuk_keuangan]',
				catatan_keuangan='$_POST[catatan_keuangan]',
				file_surat_keuangan='$fotobaru',
				tempat_folder_keuangan='$date'
				","no_agenda_keuangan='$_POST[no_agenda_keuangan]'");
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
				id_petugas_keuangan='$_POST[id_petugas_keuangan]',
				no_surat_keuangan='$_POST[no_surat_keuangan]',
				tanggal_masuk_keuangan='$_POST[tanggal_masuk_keuangan]',
				tanggal_surat_keuangan='$_POST[tanggal_surat_keuangan]',
				tanggal_penyelesaian_keuangan='$_POST[tanggal_penyelesaian_keuangan]',
				perihal_keuangan='$_POST[perihal_keuangan]',
				asal_surat_keuangan='$_POST[asal_surat_keuangan]',
				untuk_keuangan='$_POST[untuk_keuangan]',
				catatan_keuangan='$_POST[catatan_keuangan]'
				","no_agenda_keuangan='$_POST[no_agenda_keuangan]'");
				if($simpan){
					echo "<script>alert('Berhasil di Edit')</script>";
					echo "<script>document.location.href='../?lihat=data_keuangan'</script>";
				}else{
					echo "<script>alert('Gagal di edit tanpa foto')</script>";
					
				}
		}
		
	}
?>