<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('unserializeForm')){
	function unserializeForm($str) 
	{
	    $returndata = array();
	    $strArray = explode("&", $str);
	    $i = 0;
	    foreach ($strArray as $item) {
	        $array = explode("=", $item);
	        $returndata[$array[0]] = $array[1];
	    }

	    return $returndata;
	}
}

if ( ! function_exists('splitString')){
	function splitString($string,$needle,$nth){
		$max = strlen($string);
		$n = 0;
		for($i=0;$i<$max;$i++){
		    if($string[$i]==$needle){
		        $n++;
		        if($n>=$nth){
		            break;
		        }
		    }
		}
		$arr[] = substr($string,0,$i);
		$arr[] = substr($string,$i+1,$max);

		return $arr;
	}
}