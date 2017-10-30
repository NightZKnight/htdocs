<?php
require_once('page.php');

$page = new Page();

$page->titleExtra = "Contact";
$page->type = "form";
$page->pageheader = "Contact Me";

echo $page->getTop();

?>
<div id="content">

	<form action="#" method="POST">
	
		<label for="firstName">Name</label> <br>
		<input placeholder="first name" type="text" maxlength="20" id="firstName"> <br>
		

		<label for="eMail">eMail</label> <br>
		<input type="text" size="20" maxlength="25" id="eMail" placeholder="example@domain.com"> <br> <br>
		
		
		<label for="password">Message</label> <br>
		<textarea></textarea> <br> <br>

		
		<input type="submit" value="Send Message">
	
	</form>

</div>

<?php

echo $page->getBottom();

?>