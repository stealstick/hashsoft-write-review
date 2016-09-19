<?php
include 'connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$title = $_POST['title'];
$text = $_POST['text'];
$star = $_POST['star'];
$time = time();

if(isset($id)&&isset($name)&&isset($title)&&isset($text)&&isset($time))
{
	$query=mysql_query("INSERT INTO  `hashsoft`.`review` (`id` ,`name` ,`title` ,`text` ,`time`, `star`)VALUES ('$id',  '$name',  '$title',  '$text',  '$time', '$star');");
	echo json_encode(array('insert' => 'ok'));
}
else
{
	echo json_encode(array('insert' => 'error'));
}
?>