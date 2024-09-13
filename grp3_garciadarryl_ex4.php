<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type= "text/css" href="StyleSheet1.css">
    <title>note page</title>
</head>
<body>

<main>
<h1>MY NOTES</h1>

<form method = "get">
<label id="label">SET URL NAME:</label><br>
<input type="text" name="name"><br>
<br>
<input id="button" type="Submit"><br>
<br>
</form>

<form action = "process.php" method = "post"> 

<textarea class="textarea" rows="6" cols="50" name="textarea" value="" placeholder= "type something..."><?php echo $current; ?></textarea>
<input id="button" type="Submit">

</form>

<div>
<a href="log.tt">Text file</a>
</div>

<?php include('condition.php');
?>
</main>
</body>
</html>