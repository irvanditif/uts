  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>

      <?php $this->load->view("template/breadcrumb.php") ?>
    </section>

    <!-- Main content -->
    <section class="content">

      <?php
      $data = $this->session->flashdata('sukses');
      if ($data != "") { ?>
        <div id="notifikasi" class="alert alert-success"><strong>Sukses! </strong> <?= $data; ?></div>
      <?php } ?>

      <?php
      $data2 = $this->session->flashdata('error');
      if ($data2 != "") { ?>
        <div id="notifikasi" class="alert alert-danger"><strong> Error! </strong> <?= $data2; ?></div>
      <?php } ?>

      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Log</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>No HP Lama</th>
                    <th>No Hp Baru</th>
                    <th>Tgl. Diubah</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($log->result() as $row) : ?>
                    <tr class="odd gradeX">
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row->nim; ?></td>
                      <td><?php echo $row->no_hp_lama; ?></td>
                      <td><?php echo $row->no_hp_baru; ?></td>
                      <td><?php echo $row->tgl_diubah; ?></td>
                    </tr>
                  <?php endforeach; ?>
                  </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->