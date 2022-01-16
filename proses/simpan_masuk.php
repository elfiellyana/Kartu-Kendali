<?php
	include"../sistem/proses.php";
	$aksi=$_GET['aksi'];
	if($aksi=='Simpan'){
		$dua = $_FILES['file_surat_masuk']['tmp_name'];
		$fotobaru= date ('dmY').$_FILES['file_surat_masuk']['name'];
		$date=date('D-M-Y');
		if (!file_exists('../surat/surat_masuk/'.$date)) {
		  mkdir('../surat/surat_masuk/'.$date, true);
		}else{
			echo "sudah ada foldernya";
		}
		  $path="../surat/surat_masuk/".$date."/".$fotobaru;
		if (move_uploaded_file($dua, $path)){
			$simpan=$db->insert("surat_masuk","'$_POST[no_agenda_masuk]',
	 		'$_POST[id_petugas_masuk]',
	 		'$_POST[no_surat_masuk]', 
	 		'$_POST[tanggal_masuk_masuk]',
	 		'$_POST[tanggal_surat_masuk]',
	 		'$_POST[tanggal_penyelesaian_masuk]',
			'$_POST[perihal_masuk]',
			'$_POST[asal_surat_masuk]',
			'$_POST[untuk_masuk]',
			'$_POST[catatan_masuk]',
			'$fotobaru',
			'$date'");

			if ($simpan) {
		 		echo "<script>alert('Berhasil Di Simpan')</script>";
		 		echo "<script>document.location.href='../?lihat=data_masuk'</script>";
		 	}else{
		 		echo "<script>alert('Gagal Di Simpan')</script>";
		 		echo "<script>document.location.href='../?lihat=form_surat_masuk'</script>";
		 	}
		}else{
			echo "<script>alert('Gagal Upload')</script>";
		 		echo "<script>document.location.href='../?lihat=form_surat_masuk'</script>";
		} 
		
	}elseif($aksi=='Edit'){
		if (isset($_POST['cek_ubah'])) {
			$lihat=$db->get("*","surat_masuk","WHERE no_agenda_masuk='$_POST[no_agenda_masuk]'");
			$data=$lihat->fetch();
			$date=date('D-M-Y');

			if (is_file('../surat/surat_masuk/'.$date.'/'.$data['file_surat_masuk']))
			unlink('../surat/surat_masuk/'.$date.'/'.$data['file_surat_masuk']);

			
			if (!file_exists('../surat/surat_masuk/'.$date)) {
			  mkdir('../surat/surat_masuk/'.$date, true); 
			};
			$dua = $_FILES['file_surat_masuk']['tmp_name'];
			$fotobaru= date ('dmY').$_FILES['file_surat_masuk']['name'];
			$path="../surat/surat_masuk/".$date."/".$fotobaru;

			if (move_uploaded_file($dua, $path)){

				$simpan=$db->update("surat_masuk","
				id_petugas_masuk='$_POST[id_petugas_masuk]',
				no_surat_masuk='$_POST[no_surat_masuk]',
				tanggal_masuk_masuk='$_POST[tanggal_masuk_masuk]',
				tanggal_surat_masuk='$_POST[tanggal_surat_masuk]',
				tanggal_penyelesaian_masuk='$_POST[tanggal_penyelesaian_masuk]',
				perihal_masuk='$_POST[perihal_masuk]',
				asal_surat_masuk='$_POST[asal_surat_masuk]',
				untuk_masuk='$_POST[untuk_masuk]',
				catatan_masuk='$_POST[catatan_masuk]',
				file_surat_masuk='$fotobaru'
				","no_agenda_masuk='$_POST[no_agenda_masuk]'");
				if($simpan){
					echo "<script>alert('Berhasil di Edit')</script>";
					echo "<script>document.location.href='../?lihat=data_masuk'</script>";
				}else{
					echo "<script>alert('Gagal di edit dengan foto')</script>";
					
				}
			}
		}else{
			$simpan=$db->update("surat_masuk",
				"
				id_petugas_masuk='$_POST[id_petugas_masuk]',
				no_surat_masuk='$_POST[no_surat_masuk]',
				tanggal_masuk_masuk='$_POST[tanggal_masuk_masuk]',
				tanggal_surat_masuk='$_POST[tanggal_surat_masuk]',
				tanggal_penyelesaian_masuk='$_POST[tanggal_penyelesaian_masuk]',
				perihal_masuk='$_POST[perihal_masuk]',
				asal_surat_masuk='$_POST[asal_surat_masuk]',
				untuk_masuk='$_POST[untuk_masuk]',
				catatan_masuk='$_POST[catatan_masuk]'
				","no_agenda_masuk='$_POST[no_agenda_masuk]'");
				if($simpan){
					echo "<script>alert('Berhasil di Edit')</script>";
					echo "<script>document.location.href='../?lihat=data_masuk'</script>";
				}else{
					echo "<script>alert('Gagal di edit tanpa foto')</script>";
					
				}
		}
		
	}
?>