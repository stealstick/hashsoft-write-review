<?php
include 'connect.php';

$id = $_GET['id'];
$array= array();
$query=mysql_query("select name, title, text, time, star from review where id = '$id'");

if(isset($id))
{
	while ($data = mysql_fetch_assoc($query)) {
		array_push($array, array(
		'name'=>$data[name],
		'title'=>$data[title],
		'text'=>$data[text],
		'time'=>$data[time],
		'star'=>(int)$data[star],
		));
	}
	echo json_encode($array);
}
else
{
	echo json_encode(array('read' => 'error'));
}
?>