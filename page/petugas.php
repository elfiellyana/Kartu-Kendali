<?php
include 'sistem/proses.php';
$qw=$db->get("*","petugas");
?> 
 <section class="content-header">
      <h1>
        <i class="fa  fa-users"> Petugas </i>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Petugas</li>
      </ol>

    </section>
  

    <section class="content">
      
      <br><br><br>
       <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Petugas</th>
                  <th>Nama </th>
                  <th>Level</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1; 
                  foreach ($qw as $tampil) { ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo$tampil['id_petugas']; ?></td>
                    <td><?php echo$tampil['nama']; ?></td>
                    <td><?php echo$tampil['level']; ?></td>
                    <td>
                     <a href="?lihat=f_petugas&id_petugas=<?php echo $tampil['id_petugas'];?>" class="btn btn-success btn-flat btn-sm"><span class="fa fa-check"></span></a> |
                     <a href="proses/hapus_petugas.php?id_petugas=<?php echo $tampil['id_petugas']; ?>" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                     <!--
                     <button class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#delete-modal"><span class="fa fa-trash"></span></button>
                   -->
                    </td>           
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
<div id="delete-modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Konfirmasi
            </h4>
          </div>
          <div class="modal-body">
            Anda yakin ingin menghapus data ini?
          </div>
          <div class="modal-footer">
            <button class="btn btn-success btn-flat"  onclick="hapus('<?php echo$tampil['id_petugas']; ?>')">Ya</button>
            <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Tidak</button>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
  function hapus(id) {
    $.ajax({
      url:"proses/hapus_petugas.php",
      type:"POST",
      data:{
        id_profil:id,
      },
      success:function(hasil){
        location.reload();

      }
    });
  }
</script>