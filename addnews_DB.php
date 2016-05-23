<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	
$link = mysql_connect($servername, $username, $password);
	
if (!$link) {

	    die('Could not connect: ' . mysql_error());
	
}

	mysql_select_db('PostPika');
	
mysql_set_charset("utf8");
	
$sql1 = mysql_query("INSERT INTO `PostTable` (`title`, `text`, `author`, `likes`) VALUES ('".$_POST['title']."', '".$_POST['text']."', '".$_POST['author']."', 0)");

	header('Location: index.php');

?>
