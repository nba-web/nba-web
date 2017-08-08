<?php
header("Content-type:text/html;charset=utf-8");
include 'conn/conn.php';
database_connect();
    $val1 = $_POST['val1'];
	//echo "<script type='text/javascript'>alert(val1)</script>;";
	//echo "<script type='text/javascript'>alert('验证码');</script>";
	$sql="select class1,class2,class3,class4,class5,class6,class7,class8,class9,class10,class11,class12,class13,class14,class15 from reward where tel='".$val1."'";
	$query=mysql_query($sql);
	$rs = mysql_fetch_array($query);
    $class1 = $rs['class1'];
	$class2 = $rs['class2'];
	$class3 = $rs['class3'];
	$class4 = $rs['class4'];
	$class5 = $rs['class5'];
	$class6 = $rs['class6'];
	$class7 = $rs['class7'];
	$class8 = $rs['class8'];
	$class9 = $rs['class9'];
	$class10 = $rs['class10'];
	$class11 = $rs['class11'];
	$class12 = $rs['class12'];
	$class13 = $rs['class13'];
	$class14 = $rs['class14'];
	$class15 = $rs['class15'];
	//echo "<script type='text/javascript'>alert(class2);";
    //$age = $_POST['age'];
    //$job = $_POST['job'];
    $json_arr = array("val1"=>$class1,"val2"=>$class2,"val3"=>$class3,"val4"=>$class4,"val5"=>$class5,"val6"=>$class6,"val7"=>$class7,"val8"=>$class8,"val9"=>$class9,"val10"=>$class10,"val11"=>$class11,"val12"=>$class12,"val13"=>$class13,"val14"=>$class14,"val15"=>$class15);
    $json_obj = json_encode($json_arr);
    echo $json_obj;
	
?>
