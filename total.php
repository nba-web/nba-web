<?php
header("Content-type:text/html;charset=utf-8");
include 'conn/conn.php';
database_connect();
    $val1 = $_POST['val1'];
	
	database_connect();
	$sql="select * from user";
	$query=mysql_query($sql);
	$rows = mysql_num_rows($query);
	//echo "<script type='text/javascript'>alert(class2);";
    //$age = $_POST['age'];
    //$job = $_POST['job'];
    $json_arr = array("val1"=>$rows);
    $json_obj = json_encode($json_arr);
    echo $json_obj;
	
?>
