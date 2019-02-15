<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dailymaze extends CI_Controller {


	public function index()
	{
		// print_r (explode('/', $_SERVER['REQUEST_URI']));
		$this->load->model('crud');

		$data['oglinks'] = $this->crud->get_articles();



		$this->load->view('templates/header', ['title' => 'Cards']);
		$this->load->view('dailymaze_main', $data);
		$this->load->view('templates/footer');
	}



}
