<?php
header("Content-type:text/html;charset=utf-8");
include 'conn/conn.php';
database_connect();
    $val1 = $_POST['val1'];
	$sql="select code from user where tel='".$val1."'";
	$query=mysql_query($sql);
	$rs = mysql_fetch_array($query);
    $class = $rs['code'];
	setcookie("phonena", $val1, time()+36000);
	setcookie("phoneiv", $class, time()+36000);
    $json_arr = array("val1"=>$val1,"val2"=>$class);
    $json_obj = json_encode($json_arr);
    echo $json_obj;
	
?>
