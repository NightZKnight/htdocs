<?php
require_once('page.php');

$page = new Page();

$page->pageheader = "About";
$page->titleExtra = "About";
echo $page->getTop();
?>


<div id="content">

	This is where the --very-- useful about info goes ok?
	And if not then ... too bad!

</div>
<div id="sidebar"> This tells you nothing about this very important web o site.</div>

<?php

echo $page->getBottom();

?>