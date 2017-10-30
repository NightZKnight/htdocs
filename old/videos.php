<?php
require_once('page.php');

$page = new Page();

$page->pageheader = "Videos";
$page->titleExtra = "Videos";
echo $page->getTop();
?>
<div id="content">

	<p>acual money</p><br>
	
	<?php
	
	# gets the all file names of $dir and outputs to $b
	$dir = "./downloads/videos/";
	$a = scandir($dir);
	$b = array_splice($a, 2);
	#end
	
	$i = -1;
	$countOfb = count($b) - 1;
	
	foreach($b as $e)
	{
		if ($i != $countOfb)
		{
			$i++;
		}

		echo "<a href='".$dir.$b[$i]."' id='cool'>$e</a><br><br>\n";
	}
	
	?>

</div>

<?php

echo $page->getBottom();

?>