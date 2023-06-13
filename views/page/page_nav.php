<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php print(base_url())?>admlte/dist/img/user2-160x160.jpg" 
              class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
              <p><?php print($aron_name);?></p>
              <a href="#">
                <i class="fa fa-circle text-success"></i> Online
              </a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">


            <?php
               if (isset($this->session->userdata['logged_in'])) 
                {
                  $data['user_role'] = ($this->session->userdata['logged_in']['user_role']);
                  if($data['user_role'] == '1')
                  {
                    ?>

                    <li class="header">SI SETTING</li>
            
                    <li class="<?php print($nav['user_admin']); ?> treeview">
                      <a href="<?php print(base_url())?>#">
                        <i class="fa fa-key"></i> 
                        <span>User Administration</span>
                      </a>
                    </li>

                    <li class="<?php print($nav['app_setting']); ?> treeview">
                      <a href="<?php print(base_url())?>#">
                        <i class="fa fa-sitemap"></i>
                        <span>App Settings</span>
                      </a>
                    </li>

                    <?php
                  }
                } 
                else 
                {
                  header("location: ".base_url()."login_auth");
                }
            ?>

            <li class="header">TAHUN KEGIATAN</li>
              <li class="<?php print($nav['th_dash']);?> treeview">
                <a href="<?php print(base_url())?>tahun_kegiatan">
                  <i class="fa fa-dashboard"></i> 
                  <span>Tahun Kegiatan</span>
                </a>
              </li>

            <li class="header">KELUARGA</li>
			
			<li class="<?php print($nav['kel_dash']);?> treeview">
              <a href="<?php print(base_url())?>keluarga">
                <i class="fa fa-dashboard"></i> 
                <span>Dashboard</span>
              </a>
            </li>

            <li class="<?php print($nav['kel_daftar']);?> treeview">
              <a href="<?php print(base_url())?>keluarga/daftar">
                <i class="fa fa-graduation-cap"></i> 
                <span>Daftar Keluarga</span>
              </a>
            </li> 

           <li class="<?php print($nav['kel_tambah']);?> treeview">
              <a href="<?php print(base_url())?>keluarga/tambah">
                <i class="fa fa-newspaper-o"></i> 
                <span>Tambah Keluarga</span>
              </a>
            </li>

            <li class="header">ANGGOTA</li>
			
			<li class="<?php print($nav['agt_dash']);?> treeview">
              <a href="<?php print(base_url())?>anggota">
                <i class="fa fa-dashboard"></i> 
                <span>Dashboard</span>
              </a>
            </li>

            <li class="<?php print($nav['agt_daftar']);?> treeview">
              <a href="<?php print(base_url())?>anggota/daftar">
                <i class="fa fa-graduation-cap"></i> 
                <span>Daftar Anggota</span>
              </a>
            </li> 

           <li class="<?php print($nav['agt_tambah']);?> treeview">
              <a href="<?php print(base_url())?>anggota/tambah">
                <i class="fa fa-newspaper-o"></i> 
                <span>Tambah Anggota</span>
              </a>
            </li>
			
			<li class="header">KEGIATAN</li>

			<li class="<?php print($nav['keg_dash']);?> treeview">
              <a href="<?php print(base_url())?>kegiatan">
                <i class="fa fa-dashboard"></i> 
                <span>Dashboard</span>
              </a>
            </li>
			
			

			<li class="<?php print($nav['keg_daftar']);?> treeview">
              <a href="<?php print(base_url())?>kegiatan/daftar">
                <i class="fa fa-dashboard"></i> 
                <span>Daftar Kegiatan</span>
              </a>
            </li>

			<li class="<?php print($nav['keg_laporan']);?> treeview">
              <a href="<?php print(base_url())?>kegiatan/laporan">
                <i class="fa fa-file-text"></i> 
                <span>Laporan Kegiatan</span>
              </a>
            </li>
			
     
			<li class="<?php print($nav['keg_absensi']);?> treeview">
              <a href="<?php print(base_url())?>kegiatan/absensi">
                <i class="fa fa-dashboard"></i> 
                <span>Absensi</span>
              </a>
            </li>
			
			<li class="<?php print($nav['keg_dokumentasi']);?> treeview">
              <a href="<?php print(base_url())?>kegiatan/dokumentasi">
                <i class="fa fa-dashboard"></i> 
                <span>Dokumentasi</span>
              </a>
            </li>

           
			<li class="header">ADMINISTRASI</li>
            
            <li class="<?php print($nav['adm_dash']);?> treeview">
              <a href="<?php print(base_url())?>administrasi">
                <i class="fa fa-dashboard"></i> 
                <span>Dashboard</span>
              </a>
            </li>

            <li class="<?php 
                          print($nav['adm_lap_kegiatan']);
                          print($nav['adm_lap_keuangan']);
						  print($nav['adm_lap_anggota']);
                      ?> 

                treeview">
              <a href="#">
                <i class="fa fa-file-text" style="font-size:12px;"></i>
                <span>Laporan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php print($nav['adm_lap_kegiatan']);?> ">
                  <a href="<?php print(base_url())?>#">
                    <i class="fa fa-circle-o"></i> Laporan Kegiatan
                  </a>
                </li>
                <li class="<?php print($nav['adm_lap_keuangan']);?> ">
                  <a href="<?php print(base_url())?>#">
                    <i class="fa fa-circle-o"></i> Laporan Keuangan
                  </a>
                </li>
				<li class="<?php print($nav['adm_lap_anggota']);?> ">
                  <a href="<?php print(base_url())?>#">
                    <i class="fa fa-circle-o"></i> Laporan Keanggotaan
                  </a>
                </li>
              </ul>
            </li>
			
			<li class="<?php print($nav['adm_kalender']); ?> treeview">
              <a href="<?php print(base_url())?>#">
                <i class="fa fa-exclamation-triangle"></i>
                <span>Kalender Lingkungan</span>
              </a>
            </li>

           <li class="<?php 
						print($nav['adm_pengumuman']); 
						print($nav['adm_surat_masuk']); 
						print($nav['adm_surat_keluar']); 
					?> treeview">
              <a href="#">
                <i class="fa fa-newspaper-o"></i>
                <span>Surat</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php print($nav['adm_pengumuman']);?> ">
                  <a href="<?php print(base_url())?>#">
                    <i class="fa fa-circle-o"></i> Pengumuman
                  </a>
                </li>
                <li class="<?php print($nav['adm_surat_masuk']);?> ">
                  <a href="<?php print(base_url())?>#">
                    <i class="fa fa-circle-o"></i> Surat Masuk
                  </a>
                </li>
				<li class="<?php print($nav['adm_surat_keluar']);?> ">
                  <a href="<?php print(base_url())?>#">
                    <i class="fa fa-circle-o"></i> Surat Keluar
                  </a>
                </li>
              </ul>
            </li> 

            <li class="<?php print($nav['adm_ad_art']);?> ">
              <a href="<?php print(base_url())?>#">
                <i class="fa fa-calendar"></i> 
                <span>AD/ART Lingkungan</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
			
			
			
			<li class="<?php print($nav['adm_peraturan']);?> treeview">
              <a href="<?php print(base_url())?>#">
                <i class="fa fa-dashboard"></i> 
                <span>Peraturan/Tata Tertib</span>
              </a>
            </li>

 			
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>