<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaticPages extends CI_Controller {

	public function main($load = null) {

		$css = array();
		$js = array();
		
		if (!empty($load)) {
			
			$layout = $load;
			
			switch ($load) {
				case 'slides':
					$css[] = 'http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css';
					$js[] = 'http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js';
					break;
			}

			if (is_file(APPPATH.'views/'.$load.'.php')) $this->load->view('layout', ['file' => $layout, 'css' => $css, 'js' => $js]);
			else show_404();

		} else $this->load->view('layout', ['file' => 'home', 'css' => $css, 'js' => $js]);
	}
}
