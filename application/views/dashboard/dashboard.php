<div class="content-wrapper">
  <!-- Kepala Kontent -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Kontent Halaman -->
  <section class="content">

    <!-- Baris Box -->
    <div class="row">
      <!-- kolom -->
      <div class="col-lg-3 col-xs-6">
        <!-- Setting box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>
              <div class="count"><?php $query = $this->db->query("SELECT * FROM mahasiswa");
                                  echo $query->num_rows(); ?>
              </div>
            </h3>

            <p>Mahasiswa</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="<?php echo site_url('mahasiswa') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./kolom -->

      <div class="col-lg-3 col-xs-6">
        <!-- Setting box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>
              <div class="count"><?php $query = $this->db->query("SELECT * FROM log");
                                  echo $query->num_rows(); ?>
              </div>
            </h3>

            <p>Log Update</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="<?php echo site_url('log') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./kolom -->


    </div>
    <!-- /.baris -->


    <!-- baris -->
    <div class="row">

      <!-- Kolom Kiri -->
      <section class="col-lg-5 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->

        <!-- kalendar -->
        <div class="box box-solid bg-green-gradient">
          <div class="box-header">
            <i class="fa fa-calendar"></i>

            <h3 class="box-title">Kalendar</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <!-- button with a dropdown -->
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bars"></i></button>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li><a href="#">Tambah Acara</a></li>
                  <li><a href="#">Hapus Acara</a></li>
                </ul>
              </div>
              <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
              </button>
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->

          <div class="box-body no-padding">
            <!--The calendar -->
            <div id="calendar" style="width: 100%"></div>
          </div>
        </div>
        <!-- /.kalender -->

      </section>
      <!-- /.Kolom Kiri -->

      <!-- Kolom Kanan-->
      <section class="col-lg-5 connectedSortable">



      </section>
      <!-- Kolom Kanan -->

    </div>
    <!-- /.baris -->

  </section>
</div>