<?php

$comment = $_POST["textarea"];  //$_POST contains an array of variables received via the HTTP POST method.
$file = "log.tt";  //declaring variable, $file as "log.tt" file.


//this put contents to the file
file_put_contents($file, $comment);

//returns to main page.
header('location: http://localhost:8889/rootfile/folder%204/grp3_garciadarryl_ex4.php') //change this by copying your own file directory.

?>
