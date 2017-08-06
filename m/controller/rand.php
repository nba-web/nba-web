<script type="text/javascript" src="cookie.js"></script>
<?php
include '../conn/conn.php';
include_once 'lib/BmobObject.class.php';
include_once 'lib/BmobUser.class.php';
include_once 'lib/BmobBatch.class.php';
include_once 'lib/BmobFile.class.php';
include_once 'lib/BmobImage.class.php';
include_once 'lib/BmobRole.class.php';
include_once 'lib/BmobPush.class.php';
include_once 'lib/BmobPay.class.php';
include_once 'lib/BmobSms.class.php';
include_once 'lib/BmobApp.class.php';
include_once 'lib/BmobSchemas.class.php';
include_once 'lib/BmobTimestamp.class.php';
include_once 'lib/BmobCloudCode.class.php';
include_once 'lib/BmobBql.class.php';




$mytel = trim($_POST['mytel']);
$mycode = trim($_POST['mycode']);
$myinva = trim($_POST['myinva']);

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
	/*try {

    ////短信相关
    $bmobSms = new BmobSms();
	$res = $bmobSms->verifySmsCode($mytel,$mycode);
    // $res = $bmobSms->sendSms("131xxxxxxxx", "您的验证码是：222222, 有效期是10分钟。"); //发送短信
    // $res = $bmobSms->sendSmsVerifyCode("131xxxxxxxx", "注册模板");  //发送短信验证码
    // $res = $bmobSms->verifySmsCode("131xxxxxxxx","028584");  //发送短信验证码
    // $res = $bmobSms->querySms("6466181");  //查询短信状态

    var_dump($res);
	} catch (Exception $e) {
    echo $e;
	}*/
	
	$res=1;
	if($res)
	{
		database_connect();
	while(1)
	{
		$str3=generate_rand($mytel);
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
	$addSql = "INSERT INTO `reward`(`tel`,  `class1`, `class2`, `class3`, `class4`,`class5`) VALUES ('".$mytel."','1','1','1','1','1')";
	$addResult = mysql_query($addSql) or die("Error in query: $query. ".mysql_error());
	
	$sql="select rewardid from reward where tel='".$mytel."'";
	$query=mysql_query($sql);
	$rs = mysql_fetch_array($query);
    $reward = $rs['rewardid'];
	echo $reward;
	
	$sql="select uid from user where code='".$myinva."'";
	$query=mysql_query($sql);
	$rs = mysql_fetch_array($query);
    $tid = $rs['uid'];
	echo $tid;


	$times=1;
	$mydate = date('Y-m-d');
	if($str3 == ''){
		echo "<script type='text/javascript'>alert('信息输入不完整！');history.go(-1)</script>";
		exit;
	}

	$addSql = "INSERT INTO `user`(`tel`,  `code`, `reward`, `tid`, `times`,`update_at`) VALUES ('".$mytel."','".$str3."','".$reward."','".$tid."','".$times."','".$mydate."')";
	//echo 111;
	//echo $addBookSql;
	// exit;
	
	$addResult = mysql_query($addSql) or die("Error in query: $query. ".mysql_error()); 
	//$addInfo = mysql.cubrid_fetch_array($addBookResult);
	//echo var_dump($addInfo);
	if($myinva==NULL)
	{
		echo "无推荐人";
	}
	else
	{
		$sql="select times from user where uid='".$tid."'";
		$query=mysql_query($sql);
		$rs = mysql_fetch_array($query);
		$times = $rs['times'];
		echo "a $times";
		$times=$times+1;
		echo "b $times";
		echo "tid $tid";
		$sql = "UPDATE `user` set times='".$times."' where uid = '".$tid."'";
		$addResult = mysql_query($sql) or die("Error in query: $query. ".mysql_error()); 
	}
	echo "<script type='text/javascript'>alert('插入成功');location.href='../';</script>";
	}
	else
	{
		echo "验证失败";
	}
	//echo $e;
	setcookie("user", $mytel, time()+3600);	
	
	
	
?>


