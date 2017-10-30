<?php
require_once('page.php');

$page = new Page();

$page->pageheader = "Contact Information";
$page->titleExtra = "Contact";
echo $page->getTop();
?>


<div id="content">

	<b>Mailing Adress:</b> PO 12345 post office nowhere <br>
	<b>Email:</b> bridgeto@nowhere.com <br>
	<b>Fax:</b> 123-456-7890 <br>
	<b>Phone:</b> 777-777-7777 <br>

</div>
<div id="sidebar"></div>

<?php

echo $page->getBottom();

?>
	