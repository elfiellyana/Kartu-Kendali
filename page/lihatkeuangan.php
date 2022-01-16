<?php
include 'sistem/proses.php';
  if (!empty($_GET["no_agenda_keuangan"])) {
    $query=$db->get("*","surat_keuangan","where no_agenda_keuangan='$_GET[no_agenda_keuangan]'");
    $nida=$query->fetch();
    $no_agenda=$nida['no_agenda_keuangan'];
    $tanggal_masuk=$nida['tanggal_masuk_keuangan'];
    $tanggal_penyelesaian=$nida['tanggal_penyelesaian_keuangan'];
    $perihal=$nida['perihal_keuangan'];
    $tanggal_surat=$nida['tanggal_surat_keuangan'];
    $no_surat=$nida['no_surat_keuangan'];
    $asal_surat=$nida['asal_surat_keuangan'];
    $untuk=$nida['untuk_keuangan'];
    $upload=$nida['file_surat_keuangan'];
    $tempat="surat/surat_keuangan/";
    $data=$nida['no_agenda_keuangan'];
    $date =$nida['tempat_folder_keuangan'];

  }
?>
<section class="content-header">
      <h1>
        <i class=""> Form Lihat Surat Keuangan</i>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Surat Keuangan</li>
        <li class="active">Lihat Surat Keuangan</li>
      </ol>
</section>
     <section class="content">
       <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <form action="cetak_kartu.php" method="post" id="form">
                <table id="example1" class="table table-bordered table-striped">
                  <a href="page/cetak_kartu_keuangan.php?id=<?php echo$data ?>" target="_blank" class="btn btn-info pull-right">Cetak</a>
                
              
               <div class="row" >
                 <thead>
                  <tr class="td" >
                    <th>No Agenda</th>
                    <td><label><?php echo $no_agenda ?></label></td>
                  </tr>
                  <tr >
                    <th>Tanggal Masuk</th>
                    <td><label id="no_agenda"><?php echo $tanggal_masuk ?></label></td>
                  </tr>
                  <tr>
                    <th>Tanggal Penyelesaian</th>
                    <td><label id="tanggal_penyelesaian"><?php echo $tanggal_penyelesaian ?></label></td>
                 
                  </tr>
                  <tr>
                    <th>Perihal</th>
                    <td><label id="perihal"><?php echo $perihal ?></label></td>
                  </tr>
                  <tr>
                    <th>Tanggal Surat</th>
                    <td><label id="tanggal_surat"><?php echo $tanggal_surat ?></label></td>
                  </tr>
                  <tr >
                    <th>No Surat</th>
                    <td><label id="no_surat"><?php echo $no_surat ?></label></td>
                  </tr>
                  <tr>
                    <th>Asal Surat</th>
                    <td><label id="asal_surat"><?php echo $asal_surat ?></label></td>
                  </tr>
                  <tr id="untuk">
                    <th>Untuk</th>
                    <td><label id="untuk"><?php echo $untuk ?></label></td>
                  </tr>
                  <tr>
                    <tr>
                    <th>Upload</th>
                    <td><label id="upload"><?php echo $upload ?></label></td>
                  </tr>
                    <th></th>
                    <td>
                      

                      <embed src="surat/surat_keuangan/<?php echo$date ?>/<?php echo$upload ?>" width="600" height="500"> </embed>
                  </tr>
                </thead>
               </div>     
              </form>
            <div class="box-body">
              <div class="form-group">
              <div class="col-sm-10">
              
                
                <textarea id="printing-css" style="display: none;">.no-print{display:none}</textarea>
                <iframe id="printing-frame" name="print_frame" src="about:blank" style="display: none;"></iframe>
  
  
              </div>
              </div>
            </div>
                <tbody>  
                </tbody>
              </table>
            </div> 
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>

