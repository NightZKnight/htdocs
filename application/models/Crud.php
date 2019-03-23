<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model {

	function __construct()
	{
		$this->load->database();
	}

	public function get_articles()
	{
		$this->db->select('title, dis, url, img, timeadded');
		$quary = $this->db->get('news');
		return $quary->result_array();
	}

	public function put_articles($links)
	{
		
	}

}
