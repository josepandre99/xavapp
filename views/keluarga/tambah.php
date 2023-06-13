<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (isset($this->session->userdata['logged_in'])) {
  $data['username']   = ($this->session->userdata['logged_in']['username']);
  $data['aron_name']  = ($this->session->userdata['logged_in']['name']);
  $data['avatar']     = ($this->session->userdata['logged_in']['avatar']);
  $data['user_id']    = ($this->session->userdata['logged_in']['user_id']);
} else {
  header("location: " . base_url() . "login_auth");
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php print($doc_title); ?> | Keluarga</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?php print(base_url()) ?>admlte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php print(base_url()) ?>admlte/dist/css/AdminLTE.min.css">
  <!-- Jabu style -->
  <!-- <link rel="stylesheet" href="<?php print(base_url()) ?>admlte/dist/css/je.css"> -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php print(base_url()) ?>admlte/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php print(base_url()) ?>admlte/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php print(base_url()) ?>admlte/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php print(base_url()) ?>admlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php print(base_url()) ?>admlte/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php print(base_url()) ?>admlte/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php print(base_url()) ?>admlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php print(base_url()) ?>admlte/plugins/select2/select2.min.css">

  <?php
  $this->load->view('page/page_dochead');
  ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php

    // Navigation Menu Highlights
    $navi = array();
    $navi = initnav($navi);

    $navi['agt_tambah'] = "active ";
    $data['nav'] = $navi;
    $this->load->view('page/page_header', $data);
    $this->load->view('page/page_nav', $data);
    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tambah Keluarga
          <small>SI Xaverius</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Keluarga</a></li>
          <li class="active">Tambah</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">

          <!-- left column -->
          <div class="col-md-8">

            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah Keluarga</h3>
                <div class="form-head-message head-message3">
                </div><!-- .form-head-message -->
              </div><!-- /.box-header -->

              <!-- form start -->
              <form role="form" method="POST" action="<?php echo (base_url() . 'keluarga/tambah_process');?>">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama Keluarga</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input id="namaKeluarga" name="namaKeluarga" type="text" class="form-control" placeholder="Nama Keluarga">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" id="tanggalMasuk" name="tanggalMasuk" class="form-control" data-inputmask="'alias': 'date'" data-mask placeholder="Tanggal Masuk">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>No KK</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input id="noKK" name="noKK" type="number" class="form-control" placeholder="No KK">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Kepala Keluarga</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa  fa-suitcase"></i></span>
                      <input id="kepalaKeluarga" name="kepalaKeluarga" type="text" class="form-control" placeholder="Kepala Keluarga">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div><!-- /.box-footer -->
              </form>
            </div><!-- .box -->

            </form>
          </div><!--/.col (left) -->

        </div> <!-- /.row -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


    <!-- Footer Section-->
    <?php

    $this->load->view('page/page_footer');

    ?>



  </div><!-- ./wrapper -->

  <!-- jQuery 2.1.4 -->
  <script src="<?php print(base_url()) ?>admlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    //$.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.5 -->
  <script src="<?php print(base_url()) ?>admlte/bootstrap/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <!--script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php print(base_url()) ?>admlte/plugins/morris/morris.min.js"></script-->
  <!-- Sparkline -->
  <script src="<?php print(base_url()) ?>admlte/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?php print(base_url()) ?>admlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php print(base_url()) ?>admlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php print(base_url()) ?>admlte/plugins/knob/jquery.knob.js"></script>
  <!-- Sparkline -->
  <script src="<?php print(base_url()) ?>admlte/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <script src="<?php print(base_url()) ?>admlte/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?php print(base_url()) ?>admlte/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Sparkline -->
  <script src="<?php print(base_url()) ?>admlte/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php print(base_url()) ?>admlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?php print(base_url()) ?>admlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php print(base_url()) ?>admlte/plugins/fastclick/fastclick.min.js"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="<?php print(base_url()) ?>admlte/plugins/chartjs/Chart.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php print(base_url()) ?>admlte/dist/js/app.min.js"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="<?php print(base_url()) ?>admlte/dist/js/pages/dashboard.js"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- script src="<?php print(base_url()) ?>admlte/dist/js/pages/dashboard2.js"></script -->
  <!-- AdminLTE App -->
  <script src="<?php print(base_url()) ?>admlte/dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php print(base_url()) ?>admlte/dist/js/demo.js"></script>

  <!-- Select2 -->
  <script src="<?php print(base_url()) ?>admlte/plugins/select2/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="<?php print(base_url()) ?>admlte/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="<?php print(base_url()) ?>admlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="<?php print(base_url()) ?>admlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#tanggalMasuk").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});

        //Money Euro
        $("[data-mask]").inputmask();

      });
  </script>

</body>

</html>