<?php
include 'connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$title = $_POST['title'];
$text = $_POST['text'];
$time = date("F j, Y, g:i a");

if(isset($id)&&isset($name)&&isset($title)&&isset($text)&&isset($time))
{
	$query=mysql_query("INSERT INTO  `hashsoft`.`review` (`id` ,`name` ,`title` ,`text` ,`time`)VALUES ('$id',  '$name',  '$title',  '$text',  '$time');");
	echo json_encode(array('insert' => 'ok'));
}
else
{
	echo json_encode(array('insert' => 'error'));
}
?>