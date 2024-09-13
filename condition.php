<?php 
//if the log.text file exist, variable $file is = log.text file and variable $current = file_get_contents($file).

if (file_exist('log.tt'))
{
	$file = "log.tt";
	$current = file_get_contents($file); //Reads entire file into a string 

}

else {
	$myfile = fopen("log.tt", "r");  //opens file or URL.
	header("Refresh:0");   //refresh the page.
}
?>