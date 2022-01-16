<?php
include '../sistem/proses.php';
    error_reporting(0);
    $query=$db->get("*","surat_keuangan","where no_agenda_keuangan='$_GET[id]'");
    $nida=$query->fetch();
    $no_agenda=$nida['no_agenda_keuangan'];
    $tanggal_masuk=$nida['tanggal_masuk_keuangan_keuangan'];
    $tanggal_penyelesaian=$nida['tanggal_penyelesaian_keuangan'];
    $perihal=$nida['perihal_keuangan'];
    $tanggal_surat=$nida['tanggal_surat_keuangan'];
    $no_surat=$nida['no_surat_keuangan'];
    $asal_surat=$nida['asal_surat_keuangan'];
    $untuk=$nida['untuk_keuangan'];
    $upload=$nida['file_surat_keuangan'];
    $tempat="surat/surat_keuangan";
    $lulu="";
  
?>
<!DOCTYPE html>
<html>
<head>
    <title> CETAK KARTU KENDALI KEUANGAN</title>
</head>
<body onload="javascript:window.print()">
   
<table style="text-align: center;">
    <tr>
        <td><img src="../aset/dist/img/logo_stikes_hitam_putih.jpg"></td>
        <td style="font-family: sans-serif;text-align: center;">
            <p style="text-align: center;margin-left: 50px;">SEKOLAH TINGGI ILMU KESEHATAN MUHAMMADIYAH KUDUS<br>
            Jln. Ganesha I Purwosari Kudus, Kode Pos 59316<br>
            TELP/FAX (0291)437218/ 442993<br>
            <b><font size="6"> KARTU KENDALI KEUANGAN</font></b>
            
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
                <li> BAUK</li>
                <li> Keuangan</li>
                <li> Perencana , Laporan & Evaluasi</li>
                
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

    
</table>
<table border="1" style="text-align: left; width: 775px; ">
        <td rowspan="2" style="width: 460px;" > 
        <div style="background-color: #; height: 50px; margin: 10px 0px; padding-top: 5px; text-align: left; width: 10;"> Catatan :
        </div>
        </td>
        <td style="width: 321px;">
            <h3><b> Disposisi</b></h3>
            <ol>
                <li> Mohon Pendapat / Petunjuk</li>
                <li> Teliti</li>
                <li> Mohon Perincian </li>
                <li> Dan Lain - Lain</li>
            </ol>
            <table border="1" style="width: 250px; height: 25px;">
                <tr>
                    <td colspan="8" style="height: 20px;"> <center><b> Kode Mata Anggaran</b></center> </td>
                </tr>
                <tr>
                <td style="width: 25px; height: 20px;"></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
            </table>
        </td>
       
        
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
    .catatan {
       
        height: 30px;
        margin: 5px 1px; 
        padding: 0.5px; 
        text-align: left; 
        width: 742px;
    }
   

</style>
