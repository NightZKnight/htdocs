<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ParseLinks extends CI_Controller {

   private function parse($urlToFetch)
   {
		// require_once 'OpenGraph.php';
		$this->load->library('opengraph');
      $this->load->database();


		// check if data is a valid URL then fetch OpenGraph data form URL
      if (filter_var($urlToFetch, FILTER_VALIDATE_URL)) {

			$ogMeta = Opengraph::fetch($urlToFetch) or die('OpenGraph FAILED!');

			// ready data for the query builder
			$data = array(
				'title' => $ogMeta->title,
				'dis' =>   $ogMeta->description,
				'url' =>   $ogMeta->url,
				'img' =>   $ogMeta->image,
			);

			// query the first 10 letters of the og:title
			$this->db->like('title', substr($ogMeta->title, 0, 10));
			$query = $this->db->get('news');

			// check if title already exists
			if ($query->num_rows()) {
				echo "<p>That link already exists!</p>";
			}
			// if not insert the data
			else {
				$this->db->insert('news', $data);
				echo "<p>Insert successful!</p>";
				echo "<script>doo();</script>";
			}

      }

   }

	public function index()
	{

		if (isset($_POST['links'])) {
			$links = explode("\r\n", $_POST['links']);
			foreach ($links as $value) {
				if (filter_var(trim($value), FILTER_VALIDATE_URL)) {

					// echo htmlspecialchars($value);
					$cleaned = $this->security->xss_clean($value);
					$this->parse($cleaned);
					echo $cleaned;
					echo "<br>";
				}
			}
			exit();
		}


		$this->load->view('templates/header', ['title' => 'Admin']);
		$this->load->view('parse_links');
		$this->load->view('templates/footer');
	}
}
