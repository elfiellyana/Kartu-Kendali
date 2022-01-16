<?php 
	include"../sistem/proses.php";
	
	$hapus=$db->delete('petugas',"id_petugas='$_GET[id_petugas]'");
	if ($hapus){
	echo "<script>alert('Berhasil')</script>";
	echo "<script>document.location.href='../?lihat=petugas'</script>";
}else{
	echo "<script>alert('gagal')</script>";
	echo "<script>document.location.href='../?lihat=petugas'</script>";
	}
 ?>
