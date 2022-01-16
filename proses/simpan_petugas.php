<?php
	include"../sistem/proses.php";
	if(isset($_POST['Simpan'])){
		$simpan=$db->insert('petugas',"
			'$_POST[id_petugas]',
			'$_POST[nama]',
			'$_POST[password]',
			'$_POST[level]'");
		if($simpan){
		echo "<script>alert('Berhasil Terdaftar')</script>";
		echo "<script>document.location.href='../login.php'</script>";
	}else{
		echo "<script>alert('Berhasil di simpan')</script>";
		echo "<script>document.location.href='../register'</script>";
	}
}
	if(isset($_POST['Edit'])){
	$simpan=$db->update('petugas',"
			id_petugas='$_POST[id_petugas]',
			nama='$_POST[nama]',
			password='$_POST[password]',
			level='$_POST[level]'","id_petugas='$_POST[id_petugas]'");
	if($simpan){
		echo "<script>alert('Berhasil di Edit')</script>";
		echo "<script>document.location.href='../?lihat=petugas'</script>";
	}else{
		echo "<script>alert('Gagal di edit')</script>";
		echo "<script>document.location.href='../?lihat=f_petugas'</script>";
	}
}

?>