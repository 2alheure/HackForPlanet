<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function renderEmailTemplate($template_name, $data) {
	// Renvoie une chaîne de caractères contenant le html de $template_name
	// Avec des variables ##var## remplacées par $data['var']
	// Et __link__ remplacées par toAbsolute(link)
	// $data doit être sain, et le retour doit être assaini

	$abs_template_name = BASEPATH.'../application/views/email/'.$template_name.'.html';
	if (file_exists($abs_template_name)) {
		if (!$html = file_get_contents($abs_template_name))
			return false;
		
		if (empty($html = preg_replace('#__(.*)__#U', toAbsolute("$1"), $html)))
			return false;
			
		foreach ($data as $name => $value) {
			$pattern = '#\#\#'.$name.'\#\##iU';

			if (empty($html = preg_replace($pattern, $value, $html)))
				return false;
		}

		return $html;
	} else 
		return false;
}

function toAbsolute($link) {
	if (preg_match('#^https?:\/\/#i', $link) || $link == '') return $link;
	else return base_url('assets/'.$link);
}

function removeDir($dir) { 
	if (is_dir($dir)) {
		$files = array_diff(scandir($dir), array('.','..')); 
		foreach ($files as $file) { 
			(is_dir("$dir/$file")) ? removeDir("$dir/$file") : unlink("$dir/$file"); 
		} 
		return rmdir($dir); 

	} else
		return false;
}

function pr($msg = []) {
	echo '<pre>';
	print_r($msg);
	echo '</pre>';
}
