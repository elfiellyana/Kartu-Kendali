<?php 
	include"../sistem/proses.php";
	
	$hapus=$db->delete('surat_keuangan',"no_agenda_keuangan='$_GET[no_agenda_keuangan]'");
	if ($hapus){
	echo "<script>alert('Berhasil')</script>";
	echo "<script>document.location.href='../?lihat=data_keuangan'</script>";
}else{
	echo "<script>alert('gagal')</script>";
	echo "<script>document.location.href='../?lihat=data_keuangan'</script>";
	}
 ?>
