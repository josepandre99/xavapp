<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if ( ! function_exists('initnav')){
	// Array Sort
	function initnav($input) {
	    
        	$input['user_admin'] = " ";
			$input['app_setting'] = " ";
			
			$input['th_dash'] = " ";

			$input['kel_dash'] = " ";
			$input['kel_daftar'] = " ";
			$input['kel_tambah'] = " ";

			$input['agt_dash'] = " ";
			$input['agt_daftar'] = " ";
			$input['agt_tambah'] = " ";
			
			$input['keg_dash'] = " ";
			$input['keg_daftar'] = " ";
			$input['keg_laporan'] = " ";
			$input['keg_absensi'] = " ";
			$input['keg_dokumentasi'] = " ";
			
			$input['adm_dash'] = " ";
			$input['adm_lap_kegiatan'] = " ";
			$input['adm_lap_keuangan'] = " ";
			$input['adm_lap_anggota'] = " ";
			$input['adm_kalender'] = " ";
			$input['adm_pengumuman'] = " ";
			$input['adm_surat_masuk'] = " ";
			$input['adm_surat_keluar'] = " ";
			$input['adm_ad_art'] = " ";
			$input['adm_peraturan'] = " ";
		
		return $input;
	    
	}
}

