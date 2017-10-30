<?php
require_once('page.php');

$page = new Page();

$page->pageheader = "Story downloads";
$page->titleExtra = "Stories";
echo $page->getTop();
?>


<div id="content">

	These are some stories that some bros made for me. And I just thought to put them up just because.
	<a href="#">test</a>

</div>

<?php

echo $page->getBottom();

?>

