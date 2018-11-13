<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaticPages extends CI_Controller {

	public function main($load = null)
	{
		if (!empty($load)) {
			if (is_file(APPPATH.'views/'.$load.'.php')) $this->load->view('layout', ['file' => $load]);
			else show_404();
		} else $this->load->view('layout', ['file' => 'home']);
	}
}
