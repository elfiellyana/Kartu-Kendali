<?php 
	include"../sistem/proses.php";
	
	$hapus=$db->delete('surat_keluar',"nomor='$_GET[nomor]'");
	if ($hapus){
	echo "<script>alert('Berhasil')</script>";
	echo "<script>document.location.href='../?lihat=data_keluar'</script>";
}else{
	echo "<script>alert('gagal')</script>";
	echo "<script>document.location.href='../?lihat=data_keluar'</script>";
	}
 ?>
