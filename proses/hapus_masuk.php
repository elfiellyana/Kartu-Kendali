<?php 
	include"../sistem/proses.php";
	
	$hapus=$db->delete('surat_masuk',"no_agenda_masuk='$_GET[no_agenda_masuk]'");
	if ($hapus){
	echo "<script>alert('Berhasil')</script>";
	echo "<script>document.location.href='../?lihat=data_masuk'</script>";
}else{
	echo "<script>alert('gagal')</script>";
	echo "<script>document.location.href='../?lihat=data_masuk'</script>";
	}
 ?>
