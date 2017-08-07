<?php
header("Content-type:text/html;charset=utf-8");
    $val1 = $_POST['val1'];
    //$age = $_POST['age'];
    //$job = $_POST['job'];
    $json_arr = array("val1"=>$val1);
    $json_obj = json_encode($json_arr);
    echo $json_obj;
	
?>
