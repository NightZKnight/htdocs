<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ParseLinks extends CI_Controller {

   public function index()
   {
		// require_once 'OpenGraph.php';
		$this->load->library('opengraph');
      $this->load->database();


      // fetch OpenGraph data form URL
      $urlToFetch = 'https://www.dailywire.com/news/39177/pelosi-border-wall-immoral-we-need-secure-our-frank-camp';
      $ogMeta = Opengraph::fetch($urlToFetch) or die('OpenGraph FAILED!');

		// ready data for the quary builder
		$data = array(
						'title' => $ogMeta->title,
						'dis' => $ogMeta->description,
						'url' => $ogMeta->url,
						'img' => $ogMeta->image,
		);


		// quary the first 10 letters of the og:title
		$this->db->like('title', substr($ogMeta->title, 0, 10));
		$query = $this->db->get('news');

		// cheack if title already exists
		if ($query->num_rows()) {
			echo("That link already exists!");
		}

		else {
			$this->db->insert('news', $data);
			echo "Insert successful!";
		}




      // // open database and insert og:data
      // $db = new PDO("sqlite:info.sqlite") or die("pls kill me");
      // $result = $db->prepare('INSERT INTO articles (title, dis, img, url) VALUES ( ?, ?, ?, ?)');
		//
      // $result->execute(array($ogMeta->title, $ogMeta->description, $ogMeta->image, $ogMeta->url));


      // $sql = "SELECT * FROM articles";
      //
      // foreach ($db->query($sql) as $row) {
      //   echo $row['title'] . "<br>";
      // }


      $db = null;
   }

}