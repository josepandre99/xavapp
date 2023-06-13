<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('searchForId')){
	function searchForId($id, $array) {
	   foreach ($array as $key => $val) {
	       if ($val['uid'] === $id) {
	           return $key;
	       }
	   }
	   return null;
	}
}

if ( ! function_exists('clean')){
	function clean($string) {
	   $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
	   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}
}

if ( ! function_exists('build_sorter')){
	// Array Sort
	function build_sorter($key) {
	    return function ($a, $b) use ($key) {
	        return strnatcmp($b[$key], $a[$key]);
	    };
	}
}


