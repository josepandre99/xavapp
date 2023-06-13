<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('reverse_date')){
	function reverse_date($date)
	{
		$temp = explode('-', $date);
		return $temp[2].'-'.$temp[1].'-'.$temp[0];
	}
}

if ( ! function_exists('reversedate')){
	function reversedate($input)
	{
		if($input)
		{
			$temp = explode("/", $input);
			return $temp[2].$temp[1].$temp[0];
		}
		else
			return '';
	} 
}

if ( ! function_exists('reversedate_nosign')){
	function reversedate_nosign($input)
	{
		if($input)
		{
			$temp = explode("-", $input);
			return $temp[2].$temp[1].$temp[0];
		}
		else
			return '';
	} 
}

if ( ! function_exists('reversephone')){
	function reversephone($input)
	{
		return preg_replace("/[^0-9,.]/", "", $input );
	} 
}

if ( ! function_exists('set_date')){
	function set_date($date)
	{
		$temp = explode('-', $date);
		return $temp[2].'-'.$temp[1].'-'.$temp[0];
	}
}

if ( ! function_exists('set_date_name')){
	function set_date_name ($date)
	{
		$bln['01'] = "Jan";
		$bln['02'] = "Feb";
		$bln['03'] = "Mar";
		$bln['04'] = "Apr";
		$bln['05'] = "Mei";
		$bln['06'] = "Jun";
		$bln['07'] = "Jul";
		$bln['08'] = "Aug";
		$bln['09'] = "Sep";
		$bln['10'] = "Okt";
		$bln['11'] = "Nov";
		$bln['12'] = "Des";

		$temp = explode('-', $date);
		if($bln[$temp[1]])
			return $temp[2].' '.$bln[$temp[1]].' '.$temp[0];
		else
			return '00-00-0000';

	}
}

if ( ! function_exists('set_date_name_short')){
	function set_date_name_short ($date)
	{
		$temp = explode('-', $date);
		return $temp[2].'/'.$temp[1].' '.$temp[0];
	}
}

if ( ! function_exists('set_date_name_long')){
	function set_date_name_long ($date)
	{
		$bln['01'] = "Januari";
		$bln['02'] = "Februari";
		$bln['03'] = "Maret";
		$bln['04'] = "April";
		$bln['05'] = "Mei";
		$bln['06'] = "Juni";
		$bln['07'] = "Juli";
		$bln['08'] = "Agustus";
		$bln['09'] = "September";
		$bln['10'] = "Oktober";
		$bln['11'] = "November";
		$bln['12'] = "Desember";

		$temp = explode('-', $date);
		if($bln[$temp[1]])
			return $temp[2].' '.$bln[$temp[1]].' '.$temp[0];
		else
			return '00-00-0000';
	}
}

if ( ! function_exists('set_date_name_long_ltr')){
	function set_date_name_long_ltr ($date)
	{
		$bln['01'] = "Januari";
		$bln['02'] = "Februari";
		$bln['03'] = "Maret";
		$bln['04'] = "April";
		$bln['05'] = "Mei";
		$bln['06'] = "Juni";
		$bln['07'] = "Juli";
		$bln['08'] = "Agustus";
		$bln['09'] = "September";
		$bln['10'] = "Oktober";
		$bln['11'] = "November";
		$bln['12'] = "Desember";

		$temp = explode('-', $date);
		if($bln[$temp[1]])
			return $temp[0].' '.$bln[$temp[1]].' '.$temp[2];
		else
			return '00-00-0000';
	}
}

if ( ! function_exists('mask_phone')){
	function mask_phone ($phone)
	{
		$temp = substr_replace($phone, '.', 4, 0);
		return substr_replace($temp, '.', 9, 0);
	}
}

if ( ! function_exists('set_nama_hari')){
	function set_nama_hari ($day)
	{
		$hari[0] = "Minggu";
		$hari[1] = "Senin";
		$hari[2] = "Selasa";
		$hari[3] = "Rabu";
		$hari[4] = "Kamis";
		$hari[5] = "Jumat";
		$hari[6] = "Sabtu";

		return $hari[$day];
	}
}

if ( ! function_exists('set_nama_hari_short')){
	function set_nama_hari_short ($day)
	{
		$hari[0] = "Min";
		$hari[1] = "Sen";
		$hari[2] = "Sel";
		$hari[3] = "Rab";
		$hari[4] = "Kam";
		$hari[5] = "Jum";
		$hari[6] = "Sab";

		return $hari[$day];
	}
}