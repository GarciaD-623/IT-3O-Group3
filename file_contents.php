<?php 

if (file_exist('log.tt'))
{
	$file = "log.tt";
	$current = file_get_contents($file);

}
else {
	$myfile = fopen("log.tt", "w");
	g=header("Refresh:0");
}
?>