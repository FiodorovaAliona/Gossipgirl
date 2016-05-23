<?
$servername = "localhost";
$user="root";

$password = "";
$json_arr = array();
$link = mysql_connect($servername, $user, $password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('PostPika');
mysql_set_charset("utf8");
if(isset($_GET['topnews'])) {
$sql1 = mysql_query("SELECT `id`, `title`, `text`, `author`, `likes` FROM `PostTable` ORDER BY likes DESC LIMIT 10");
	while ($result1 = mysql_fetch_array($sql1)) {
		$row['id'] = $result1['id'];
		$row['title'] = $result1['title'];
		$row['text'] = $result1['text'];
		$row['author'] = $result1['author'];
		$row['likes'] = $result1['likes'];
		array_push($json_arr,$row);
	}
	echo json_encode($json_arr);
}
if(isset($_GET['newnews'])) {
	$sql1 = mysql_query("SELECT `id`, `title`, `text`, `author`, `likes` FROM `PostTable` ORDER BY id DESC LIMIT 10");
	while ($result1 = mysql_fetch_array($sql1)) {
		$row['id'] = $result1['id'];
		$row['title'] = $result1['title'];
		$row['text'] = $result1['text'];
		$row['author'] = $result1['author'];
		$row['likes'] = $result1['likes'];
		array_push($json_arr,$row);
	}
	echo json_encode($json_arr);
}
if(isset($_POST['addlike'])) {
	$sql1 = mysql_query("UPDATE `PostTable` SET `likes` = `likes` + 1 WHERE id = '".$_POST['addlike']."'");
}
?>