<?php
	include"../sistem/proses.php";
	if(isset($_POST['Simpan'])){
		$simpan=$db->insert('petugas',"
			'$_POST[id_petugas]',
			'$_POST[nama]',
			'$_POST[password]',
			'$_POST[level]'");
		if($simpan){
		echo "<script>alert('Berhasil di simpan')</script>";
		echo "<script>document.location.href='../?lihat=home'</script>";
	}else{
		echo "<script>alert('Berhasil di simpan')</script>";
		echo "<script>document.location.href='../register'</script>";
	}
}
	if(isset($_POST['Edit'])){
	$simpan=$db->update('pelanggan',"
			id_pelanggan='$_POST[id_pelanggan]',
			nama_pelanggan='$_POST[nama_pelanggan]',
			alamat='$_POST[alamat]',
			no_telepon='$_POST[no_telepon]'","id_pelanggan='$_POST[id_pelanggan]'");
	if($simpan){
		echo "<script>alert('Berhasil di Edit')</script>";
		echo "<script>document.location.href='../index.php?p=pelanggan'</script>";
	}else{
		echo "<script>alert('Gagal di edit')</script>";
		echo "<script>document.location.href='../index.php?p=pelanggan'</script>";
	}
}

?>