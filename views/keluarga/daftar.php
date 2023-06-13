<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  if (isset($this->session->userdata['logged_in'])) 
  {
    $data['username']   = ($this->session->userdata['logged_in']['username']);
    $data['aron_name']  = ($this->session->userdata['logged_in']['name']);
    $data['avatar']     = ($this->session->userdata['logged_in']['avatar']);
    $data['user_id']    = ($this->session->userdata['logged_in']['user_id']);
  } 
  else 
  {
    header("location: ".base_url()."login_auth");
  }
  
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php print($doc_title); ?> | Anggota</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php print(base_url())?>admlte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php print(base_url())?>admlte/dist/css/AdminLTE.min.css">
    <!-- Jabu style -->
    <link rel="stylesheet" href="<?php print(base_url())?>admlte/dist/css/je.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php print(base_url())?>admlte/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php print(base_url())?>admlte/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php print(base_url())?>admlte/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php print(base_url())?>admlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php print(base_url())?>admlte/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php print(base_url())?>admlte/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php print(base_url())?>admlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php print(base_url())?>admlte/plugins/datatables/dataTables.bootstrap.css">

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

			$navi['agt_daftar'] = "active ";
			$data['nav'] = $navi;
			$this->load->view('page/page_header', $data);
			$this->load->view('page/page_nav', $data);
		?>
		
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar Keluarga
            <small>SI Xaverius</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Keluarga</a></li>
            <li class="active">Daftar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">

            <!-- left column -->
            <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table Daftar Keluarga</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="daftarKeluarga" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama Keluarga</th>
                        <th>Tanggal Masuk</th>
                        <th>No KK</th>
                        <th>Kepala Keluarga</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        foreach($list_keluarga as $kel) {
                          echo('<tr>');
                            echo('<td>'.$kel['kel_nama'].'</td>');
                            echo('<td>'.set_date_name($kel['kel_awal_masuk']).'</td>');
                            echo('<td>'.$kel['kel_no_kk'].'</td>');
                            echo('<td>'.$kel['kel_kepala'].'</td>');
                            echo('<td><button class="btn btn-warning btn-sm">Edit</button> <button class="btn btn-danger btn-sm" id="'.$kel['kel_id'].'" onClick="clickBtnDelete(this.id)">Delete</button></td>');
                          echo('</tr>');
                        }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Nama Keluarga</th>
                        <th>Tanggal Masuk</th>
                        <th>No KK</th>
                        <th>Kepala Keluarga</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (left) -->

          </div> <!-- /.row -->

          <div class="modal modal-danger">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Hapus Data Keluarga ?</h4>
                </div>
                <div class="modal-body">
                  <p>Data yang sudah dihapus tidak dapat dikembalikan..</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-outline" onClick="deleteDataKeluarga()">Ya</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      <?php

        $this->load->view('page/page_footer');

      ?>


      
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php print(base_url())?>admlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      //$.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php print(base_url())?>admlte/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php print(base_url())?>admlte/plugins/morris/morris.min.js"></script-->
    <!-- Sparkline -->
    <script src="<?php print(base_url())?>admlte/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php print(base_url())?>admlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php print(base_url())?>admlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php print(base_url())?>admlte/plugins/knob/jquery.knob.js"></script>
    <!-- Sparkline -->
    <script src="<?php print(base_url())?>admlte/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php print(base_url())?>admlte/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php print(base_url())?>admlte/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Sparkline -->
    <script src="<?php print(base_url())?>admlte/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php print(base_url())?>admlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php print(base_url())?>admlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php print(base_url())?>admlte/plugins/fastclick/fastclick.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?php print(base_url())?>admlte/plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php print(base_url())?>admlte/dist/js/app.min.js"></script>
    
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="<?php print(base_url())?>admlte/dist/js/pages/dashboard.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!--script src="<?php print(base_url())?>admlte/dist/js/pages/dashboard2.js"></script-->

    <!-- DataTables -->
    <script src="<?php print(base_url())?>admlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php print(base_url())?>admlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
    
    <script>
      $(function () {
        $("#daftarKeluarga").DataTable();
      });

      let selectedIdKeluarga = 0;
      function clickBtnDelete(id) {
        $('.modal-danger').modal('show');
        selectedIdKeluarga = id;
      }

      function deleteDataKeluarga() {
        alert(selectedIdKeluarga);
        $.ajax({
          url: '<?php echo (base_url() . 'keluarga/hapus');?>',
          type: 'POST',
          dataType: 'text',
          data: {
              idKeluarga: selectedIdKeluarga
          },
       })
       .done(function(data) {
          console.log(data);
        })
      }


    </script>

  </body>
</html>
