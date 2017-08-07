<?php
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
include 'conn/conn.php';
$mytel = trim($_POST['mytel']);
$mylen = strlen($mytel);
database_connect();
$sql="select * from user where tel='".$mytel."'";
$query=mysql_query($sql);
$rows = mysql_num_rows($query);
if($rows != 0)
{
	echo "<script type='text/javascript'>alert('该号码已经注册啦，请登录');</script>";
	exit("该号码已经注册");
}
if($mylen==11)
{
try {

    
    $bmobSms = new BmobSms();
    // $res = $bmobSms->sendSms("131xxxxxxxx", "您的验证码是：222222, 有效期是10分钟。"); //发送短信
    // $res = $bmobSms->sendSmsVerifyCode("131xxxxxxxx", "注册模板");  //发送短信验证码
    // $res = $bmobSms->verifySmsCode("131xxxxxxxx","028584");  //发送短信验证码
    // $res = $bmobSms->querySms("6466181");  //查询短信状态

   $res = $bmobSms->sendSmsVerifyCode($mytel, "注册模板");
    var_dump($res);
} catch (Exception $e) {
    echo $e;
}

echo "<script type='text/javascript'>alert('已发送验证码');</script>";
}
else
{
	echo "<script type='text/javascript'>alert('输入正确手机号');</script>";
}
?>
