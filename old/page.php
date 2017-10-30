<?php

class Page
{
	public $type = "default";
	public $title = "The Stuff Site";
	public $pageheader = "Welcome to stuff";
	public $titleExtra = "";
	
	public function getTop()
	{
		$output  = $this->_getDTD();
		$output .= $this->_getHtmlOpen();
		$output .= $this->_getHead();
		$output .= $this->_getHeader();
		$output .= file_get_contents("inc/links.inc");
		
		return $output;
	}
	
	private function _getDTD()
	{
		$dtd = "<!DOCTYPE html>";
		return $dtd . "\n";
	}
	
	private function _getHtmlOpen()
	{
		$htmlopen = "<html lang=\"en\">";
		return $htmlopen . "\n";
	}
	
	private function _getHead()
	{
		switch($this->type)
		{
			case "default":
				$output = file_get_contents("inc/header.inc");
				break;
			case "form":
				$output = file_get_contents("inc/header-form.inc");
				break;
		}
		
		if ($this->titleExtra != "")
		{
			$title = $this->titleExtra . " | " . $this->title;
		}
		else
		{
			$title = $this->title;
		}
		$output .= "<title>" . $title . "</title>";
		$output .= "</head>";
		
		return $output . "\n";
	}
	
	private function _getHeader()
	{
		$output =  "<body>" . "\n";
		$output .= "<div id=\"header\"><h1>{$this->pageheader}</h1></div>";
		
		return $output . "\n";
	}
	
	public function getBottom()
	{
		return file_get_contents("inc/footer.inc");
	}
}





?>