<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dailymaze extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header', ['title' => 'Cards']);
		$this->load->view('dailymaze_main');
		$this->load->view('templates/footer');
	}


}
