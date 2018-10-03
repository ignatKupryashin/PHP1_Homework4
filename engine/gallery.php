<?
$data=scandir("minimal/");
foreach ($data as $value) {
	if ($value=="."||$value=="..")
		{continue;}
	else{
	echo "<a href=\"full/$value\" target=\"_blanc\"><img src=\"minimal/$value\"></a>";}
}
?>
