<?php
include '../sistem/proses.php';

    $query=$db->get("*","surat_masuk","where no_agenda_masuk='$_GET[id]'");
    $nida=$query->fetch();
    $no_agenda=$nida['no_agenda_masuk'];
    $tanggal_masuk=$nida['tanggal_masuk_masuk'];
    $tanggal_penyelesaian=$nida['tanggal_penyelesaian_masuk'];
    $perihal=$nida['perihal_masuk'];
    $tanggal_surat=$nida['tanggal_surat_masuk'];
    $no_surat=$nida['no_surat_masuk'];
    $asal_surat=$nida['asal_surat_masuk'];
    $untuk=$nida['untuk_masuk'];
    $upload=$nida['file_surat_masuk'];
    $tempat="surat/surat_masuk";
    $lulu="";
  
?>
<!DOCTYPE html>
<html>
<head>
    <title> CETAK KARTU KENDALI</title>
</head>
<body onload="javascript:window.print()" >
   
<table style="text-align: center;">
    <tr>
        <td><img src="../aset/dist/img/logo_stikes_hitam_putih.jpg"></td>
        <td style="font-family: sans-serif;text-align: center;">
            <p style="text-align: center;margin-left: 50px;">SEKOLAH TINGGI ILMU KESEHATAN MUHAMMADIYAH KUDUS<br>
            Jln. Ganesha I Purwosari Kudus, Kode Pos 59316<br>
            TELP/FAX (0291)437218/ 442993<br>
            <b><font size="6"> KARTU KENDALI</font></b>
            
        </p>
            
        </td>
    </tr>
</table>
<table border="1">
    <div>
        <td>
            <div class="sifat"> PENTING :
            <input type="" class="kotak" name="">
            </div>
        </td>
        <td>
            <div class="sifat"> RAHASIA :
                <input type="" class="kotak" name="">
            </div>
        </td>
        <td>
            <div class="sifat"> SEGERA :
                <input type="" class="kotak" name="">
            </div>
        </td>
        <td>
            <div class="sifat"> BIASA :
                <input type="" class="kotak" name="" >
            </div>
        </td>
    </div>
</table>

<table border="1">
        <td>
            <div class="box">
                <label> NO AGENDA : <?php echo $no_agenda?></label><br>
                <label> TANGGAL MASUK : <?php echo $tanggal_masuk?> </label>
            </div>
        </td>
        <td>
            <div class="box"> TANGGAL PENYELESAIAN : <?php echo $tanggal_penyelesaian?></div>
        </td>  
</table>
<table border="1">
        <td>
            <div style="height: 30px; margin: 7px 0px; padding: 0.5px; text-align: left; width: 763px;">PERIHAL : <?php echo $perihal?></div>
        </td>
</table>
<table border="1">
        <td>
            <div class="box1"><label> TANGGAL SURAT : <?php echo $tanggal_surat?> </label></div>
        </td>
        <td>
            <div class="box1"><label> NO SURAT : <?php echo $no_surat?> </label></div>
        </td>
</table>
<table border="1">
        <td>
            <div style="height:30px; margin: 5px 2px; padding: 0.5px; text-align: left; width: 760px;">
                <label> ASAL SURAT : <?php echo $asal_surat?> </label><br>
                <label> UNTUK : <?php echo $untuk?> </label>
            </div>
        </td>
</table>


   
<table border="1" style="text-align: left; width: 775px; ">
    <tr>
        <th colspan="3" style="width: 460px;"><center> Tujuan</center>  </th>
        <th rowspan="1" style="width: 315px;"><center> Dari Ketua Diteruskan Kepada</center></th>
    </tr>
    <tr>
        <td style="width: 50px;">&nbsp;</td>
        <td colspan="2"> Instruksi / Informasi Ketua</td>
        <td rowspan="4" >
            <ol>
                <li> Kepala Bagian Kesekretariatan</li>
                <li> Kemahasiswaan, Humas Dan Kerjasama</li>
                <li> Rumah Tangga</li>
                <li> Pengelolaan Unit Usaha</li>
                <li> Admisi, Karier, Alumni Dan Tracer Study</li>
                <li> Pendaftaran </li>
                <li> Studi Islam dan Kemuhammadiyahan </li>
                <li> Kantor Urusan Internasional </li>
                <li> UPT Perpustakaan</li>
                <li> Keuangan </li>
                <li> Bidang Informasi Web Institusi & IT </li>
                <li> Pembinaan Asrama dan BK</li>
                <li> Perencanaan & Pengembangan Institusi</li>
                <li> ......................................</li>
            </ol>
        </td>
    </tr>
    <tr> 
        <td>&nbsp;</td>
        <td colspan="2"> Instruksi /Informasi Wakil I</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="2"> Instruksi /Informasi Wakil II</td>
       
        
    </tr>
    <tr> 
        <td>&nbsp;</td>
        <td colspan="2"> Instruksi /Informasi Wakil III</td>
    </tr>

    <tr> 
        <td>&nbsp;</td>
        <td> Instruksi /Informasi BAU & AK</td>
        <td style="width: 100px;"></td>
        <td rowspan="6">
            <h3><b> Disposisi</b></h3>
            <ol>
                <li> Mohon Pendapat / Petuntuk</li>
                <li> Teliti</li>
                <li> Mohon Perincian </li>
                <li> Untuk Diketahui</li>
                <li> Ingatkan </li>
                <li> Siapkan </li>
                <li> Ikuti Perkembangan</li>
                <li> Diedarkan</li>
                <li> Diproses / Selesaikan</li>
                <li> Dihimpun / Arsip </li>
                <li> Dan Lain - Lain</li>
            </ol>
        </td>
    </tr>
    <tr> 
        <td>&nbsp;</td>
        <td> Instruksi /Informasi Jurusan <br> S1 Keperawatan</td>
        <td></td>
    </tr>
    <tr> 
        <td>&nbsp;</td>
        <td> Instruksi /Informasi Jurusan <br> D3 Keperawatan</td>
        <td></td>
    </tr>
    <tr> 
        <td>&nbsp;</td>
        <td> Instruksi /Informasi Jurusan <br> S1 Farmasi</td>
        <td></td>
    </tr>
    <tr> 
        <td>&nbsp;</td>
        <td> Instruksi /Informasi Jurusan <br> D-3 Kebidanan</td>
        <td></td>
    </tr>
    <tr> 
        <td>&nbsp;</td>
        <td> Instruksi /Informasi Jurusan <br> Profesi Ners</td>
        <td></td>
    </tr>


    <tr> 
        <td>&nbsp;</td>
        <td> Instruksi /Informasi Ketua <br> Lembaga Penjamin Mutu (LPM)</td>
        <td></td>
        <td rowspan="2">
            <div style="background-color: #; height: 50px; margin: 10px 0px; padding: 5px; text-align: left; width: 310px;"> Catatan :
            </div>
        </td>
        
        
     
    </tr>
    <tr> 
        <td>&nbsp;</td>
        <td> Instruksi /Informasi <br> Lembaga LPPM</td>
        <td></td>
        
        
     
    </tr>
    <tr> 
        <td>&nbsp;</td>
        <td>  Instruksi /Informasi <br> Lembaga Laboratorium</td>
        <td></td>
        <td>
            <center>
            <table border="1" style="width: 310px; height: 25px;">
                <tr>
                    <td colspan="8" style="height: 20px;"> <center><b> Kode Mata Anggaran</b></center> </td>
                </tr>
                <tr>
                <td style="width: 30px; height: 20px;"></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
            </table>
            </center>
            
         </td>
        

        
    </tr>
</table>
</body>
</html>

<style type="text/css">
    .kotak{
        height: 15px;
        width: 50px;
        margin: 0.5 0.5px;
        position: left;
    }
    .sifat{
        height:15px;
        margin: 7px 0px; 
        padding: 2px; 
        text-align: center; 
        width: 182px;
    }
    .box {
       
        height: 30px;
        margin: 5px 1px; 
        padding: 0.5px; 
        text-align: left; 
        width: 376px;
    }
    .box1 {
        background-color: #;
        height: 20px;
        margin: 5px 1px; 
        padding: 0.5px; 
        text-align: left; 
        width: 376px;
    }
   

</style>
