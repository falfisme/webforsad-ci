<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
        $this->load->library('upload');
	}

	public function index()
	{
		$berita 	= $this->berita_model->listing();
		$data = array(	'title' 	=> 'FORSAD - Home',
						'isi'		=> 'user/home/wrapper_homepage',
						'berita'	=> $berita);
		$this->load->view('user/layout/wrapper.php', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */