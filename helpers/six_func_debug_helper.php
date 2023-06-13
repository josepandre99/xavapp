<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('dump')){
	function dump($var, $name=null)
	{
		print("<pre>");
		if(!empty($name))
			print('--$'.strtoupper($name).'--'."\n");
		var_dump($var);
		print("</pre>");
	}
}






