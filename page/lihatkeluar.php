<?php
  include 'sistem/proses.php';
  if (!empty($_GET["nomor"])) {
    $query=$db->get("*","surat_keluar","where nomor='$_GET[nomor]'");
    $nida=$query->fetch();
    $nomor=$nida['nomor'];
    $kode=$nida['kode'];
    $alamat=$nida['alamat'];
    $tanggal_surat=$nida['tanggal_surat'];
    $no_surat=$nida['no_surat'];
    $perihal=$nida['perihal'];
    $keterangan=$nida['keterangan'];
    $upload=$nida['file_surat'];
    $tempat="surat/surat_keluar";
    $lila="";
    $date=$nida['tempat_folder_keluar'];
  }
?>
<section class="content-header">
      <h1>
        <i class=""> Form Lihat Surat Keluar</i>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Surat Keluar</li>
        <li class="active">Lihat Surat Keluar</li>
      </ol>
</section>
     <section class="content">
       <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              
               <div class="row" >
                 <thead>
                  <tr class="td">
                    <th>Nomor</th>
                    <td><?php echo$nida['nomor'] ?></td>
                  </tr>
                  <tr class="td">
                    <th>Kode</th>
                    <td><?php echo $kode?></td>
                  </tr>
                  <tr class="td">
                    <th>Alamat</th>
                    <td><?php echo $alamat?></td>
                  </tr>
                  <tr class="td">
                    <th>Tanggal Surat</th>
                    <td><?php echo $tanggal_surat?></td>
                  </tr>
                  <tr class="td">
                    <th>Nomor Surat</th>
                    <td><?php echo $no_surat?></td>
                  </tr>
                  <tr class="td">
                    <th>Perihal</th>
                    <td><?php echo $perihal?></td>
                  </tr>
                  <tr class="td">
                    <th>Keterangan</th>
                    <td><?php echo $keterangan?></td>
                  </tr>
                  <tr>
                    <tr>
                    <th>Upload</th>
                    <td><?php echo $upload?></td>
                  </tr>
                    <th></th>
                    <td>

                      <embed src="surat/surat_keluar/<?php echo$date ?>/<?php echo$upload ?>" width="600" height="500"> </embed>

                    </td>
                  </tr>
  
</thead>
  
                
               </div>     
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
