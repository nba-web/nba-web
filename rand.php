<?php
include 'conn/conn.php';
function generate_rand($tel) {
    $c= "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    srand((double)microtime()*1000000);
    for ($i=0; $i<2; $i++) {
        $rand.= $c[rand()%strlen($c)];
    }
	$myuse=substr($tel,-4);
	$restr = $myuse . "" . $rand;
    return $restr;
}
?>
<?php
	$tel="13180803412";
	//$str3 = $myuse . "" . $str;
?>


<?php 
	
	//$no = trim($_POST['no']);
	database_connect();
	while(1)
	{
	$str3=generate_rand($tel);
	echo $str3;
	$sql="select * from user where code='".$str3."'";
	$query=mysql_query($sql);
    $rows = mysql_num_rows($query);
	echo $rows;
	if($rows == 0)
	{
		break;
	}
	}
	$reward=1;
	$tid=1;
	$times=1;
	$mydate = date('Y-m-d');
	if($str3 == ''){
		echo "<script type='text/javascript'>alert('信息输入不完整！');history.go(-1)</script>";
		exit;
	}

	$addSql = "INSERT INTO `user`(`tel`,  `code`, `reward`, `tid`, `times`,`update_at`) VALUES ('".$tel."','".$str3."','".$reward."','".$tid."','".$times."','".$mydate."')";
	//echo 111;
	//echo $addBookSql;
	// exit;
	
	$addResult = mysql_query($addSql) or die("Error in query: $query. ".mysql_error()); 
	//$addInfo = mysql.cubrid_fetch_array($addBookResult);
	//echo var_dump($addInfo);

	echo "<script type='text/javascript'>alert('插入成功');location.href='m/index.htm';</script>";
	
	
	
?>