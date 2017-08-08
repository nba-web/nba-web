<!DOCTYPE html>
<?php
include 'conn/conn.php';
$mytel = trim($_POST['mytel']);
$mycode = trim($_POST['mycode']);
$myinva = trim($_POST['myinva']);

database_connect();
$sql="select * from user where tel='".$mytel."'";
$query=mysql_query($sql);
$rows = mysql_num_rows($query);
if($rows != 0)
{
	echo "<script type='text/javascript'>alert('由于您重复刷新');location.href='./';</script>";
	return;
}

if($mytel==NULL)
{
	echo "<script type='text/javascript'>alert('手机号为空');location.href='./';</script>";
	return;
}

?>

<script type="text/javascript" src="cookie.js"></script>
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
	$iffause=1;
	setcookie("phonetu", $mytel, time()+36000);
	setcookie("phonetin", $myinva, time()+36000);
	setcookie("phoneis", $iffause, time()+4);
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
		//echo $rows;
		if($rows == 0)
		{
			break;
		}
	}
	
	//setcookie("tempmyinva", $myinva, time()+36000);
	$addSql = "INSERT INTO `reward`(`tel`,  `class1`, `class2`, `class3` ,`class4` , `class5`, `class6`, `class7` ,`class8`, `class9`, `class10`, `class11` ,`class12` , `class13`, `class14`, `class15`) VALUES ('".$mytel."','1','1','1','0','0','0','0','0','0','0','0','0','0','0','0')";
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


	$times=0;
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
	setcookie("phonena", $mytel, time()+36000);
	setcookie("phoneiv", $str3, time()+36000);
	setcookie("isture", "", time() - 3600);
?>
<html lang="zh-CN">
<head>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">

<style type="text/css">   
ul{ list-style-type:none;}   
</style>  

<meta charset="gbk">
<meta name="robots" content="all">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<meta name="author" content="Tencent-TGideas">
<meta name="Copyright" content="Tencent">
<title>篮球大师-官方网站-全新手游-真实NBA经理人手游</title>
<link rel="stylesheet" href="css/index.css" type="text/css" />


<script type="text/javascript">
(function (win,doc){
if (!win.addEventListener) return;
var html=document.documentElement;
function setFont()
{
	var cliWidth=html.clientWidth;
	html.style.fontSize=100*(cliWidth/640)+'px';
}
win.addEventListener('resize',setFont,false);
setFont();
})(window,document);
var setSite={ //设置网站属性
		siteType:"a20170613subscribe", //必填项:"os"代表是官网，如果不是，则填写actName例如a20160701xxx
		pageType:"m", //必填项:本页面的定位；按照页面含义填写例如main||list||detail||download||share||page1||pageN
		pageName:"移动端首页", //必填项:页面中文名
		osact:0, //选填项:是否是官网专题(在官网运营的专题)boolean；默认是0；可以在链接上加入参数osact=1来灵活设置
		ingame:0, //选填项:是否投放在游戏APP内boolean；默认是0；可以在链接上加入参数ingame=1来灵活设置
		stayTime:0 //选填项:是否需要统计停留时长boolean；默认是0
	}
</script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript">
//var cook=$.cookie('user')
//alert($.cookie('user'));
//alert($.cookie('myinva'));
 </script>
 
 
<script src="js/index.js"></script>

</head>

<body><img src="../../game.gtimg.cn/images/slg/m/web201704/share_logo.jpg" tppabs="https://game.gtimg.cn/images/slg/m/web201704/share_logo.jpg" style="opacity: 0; position: absolute; bottom:0;left:0;" alt="">
	<header>
		<h1><a onclick="void();">篮球大师<em style="color: #ffffff;font-size:50%;padding-top:15px">真实NBA经理人手游</em></a></h1>
		<a class="spr mygift_btn" >我的礼包</a>
		<a class="spr home_btn" >进入官网</a>
	</header>
	
	<section class="s1">
		<a  class="spr subscribe_btn subscribe_btn1">立即预约</a>
	</section>
	<section class="s2">
		<a class="spr btn ljyuzhang">立即预约</a>
	</section>
	
	<section class="s5">
		<a  onclick="btn1('open_invite')" >邀请好友</a>
	</section>
	<section class="s6">
	
	<div id="slider">
	<ul class="slides clearfix"> <!--class="slides clearfix"-->
		<li><img class="responsive" src="img/1.jpg"></li>
		<li><img class="responsive" src="img/2.jpg"></li>
		<li><img class="responsive" src="img/3.jpg"></li>
		<li><img class="responsive" src="img/4.jpg"></li>
		<li><img class="responsive" src="img/5.jpg"></li>
		<li><img class="responsive" src="img/6.jpg"></li>
	</ul>
	</div>
	<!--<ul class="pagination">
		<li class="active"></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>-->
	</div>
<ul class="controls">
		<li><img src="img/prev.png" alt="previous"></li>
		<li><img src="img/next.png" alt="next"></li>
	</ul>

<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="dist/easySlider.js"></script>
<script type="text/javascript">
	$(function() {
		$("#slider").easySlider( {
			slideSpeed: "5",
			paginationSpacing: "15px",
			paginationDiameter: "12px",
			paginationPositionFromBottom: "20px",
			slidesClass: ".slides",
			controlsClass: ".controls",
			paginationClass: ".pagination"					
		});
	});
</script>

	</section>
	<section class="s7">
		
	</section>
	<iframe name="formsubmit" style="display:none;">  
		</iframe>  
	<iframe name="myformsubmit" style="display:inline;">  
		</iframe>  
	<script type="text/javascript">
			function guihuan()
			{
			document.forms.myform.action="rand.php";
			document.forms.myform.target="";
			 document.form.submit()
			}
			function baosun()
			{
			document.forms.myform.action="getcode.php" ;
			document.forms.myform.target="formsubmit" ;
			 document.form.submit()
			}
	</script>
	<div class="mask"></div>
	
	<div id="login_slt" class="login_slt sprbg" style="display: none;">

		<a href="javascript:;" class="close_btn" onclick="btn1('open')">关闭</a>
		<form id="myform" method="POST">
		
		<input type="text" placeholder="请输入正确的手机号码" id="mytel" name="mytel" style="margin-top:20%;">
		<input type="text" placeholder="请输入手机验证码" id="mycode" name="mycode" style="margin-top:20%;">
		<input type="text" placeholder="请输入邀请码" id="myinva" name="myinva" style="margin-top:20%;">
		<input id="submit" type="submit" value="预约" onclick="guihuan()">
		<input type="submit" value="获取手机验证码" onclick="baosun()">
		</form>
		
	</div>
	<div id="gift" class="gift" style="display: none;">

		<a href="javascript:;" onclick="btn1('gift')">关闭</a>
		<p id ="gift_num1" style="margin-left:0.4rem">1000</p>
		<p id ="gift_num2" style="margin-left:0.41rem">1000</p>
		<p id ="gift_num3" style="margin-left:0.42rem">1000</p>
		<p id ="gift_num4" style="margin-left:0.43rem">1000</p>
		
		<p id ="gift_num5" style="margin-left:0.4rem; margin-top:0.8rem">1000</p>
		<p id ="gift_num6" style="margin-left:0.41rem; margin-top:0.8rem">1000</p>
		<p id ="gift_num7" style="margin-left:0.42rem; margin-top:0.8rem">1000</p>
		<p id ="gift_num8" style="margin-left:0.43rem; margin-top:0.8rem">1000</p>
		
		<p id ="gift_num9" style="margin-left:0.4rem; margin-top:0.8rem">1000</p>
		<p id ="gift_num10" style="margin-left:0.41rem; margin-top:0.8rem">1000</p>
		<p id ="gift_num11" style="margin-left:0.42rem; margin-top:0.8rem">1000</p>
		<p id ="gift_num12" style="margin-left:0.43rem; margin-top:0.8rem">1000</p>
		
		<p id ="gift_num13" style="margin-left:0.4rem; margin-top:0.8rem">1000</p>
		<p id ="gift_num14" style="margin-left:0.41rem; margin-top:0.8rem">1000</p>
		<p id ="gift_num15" style="margin-left:0.42rem; margin-top:0.8rem">1000</p>
	</div>
	<div class="sprbg popup" id="succeed">
		<a href="http://127.0.0.1/nba-web/m/" class="close_btn_succeed">关闭</a>
	</div>
	</body>




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
	
	
	
	//$addInfo = mysql.cubrid_fetch_array($addBookResult);
	//echo var_dump($addInfo);
	if($tid==NULL)
	{
		echo "无推荐人";
	}
	else
	{
		$sql="select reward,times,update_at from user where uid='".$tid."'";
		$query=mysql_query($sql);
		$rs = mysql_fetch_array($query);
		
		$usereward = $rs['reward'];
		$updatetime = $rs['update_at'];
		$today = date('Y-m-d');
		if($updatetime==$today)
		{			
			$times = $rs['times'];
			$times=$times+1;

		}
		else
		{
			$times = 1;
		}
		$sql = "UPDATE `user` set times='".$times."' where uid = '".$tid."'";
		$addResult = mysql_query($sql) or die("Error in query: $query. ".mysql_error()); 

		if($times==1)
		{
			$sql="select class6 from reward where rewardid = '".$usereward."'";
			$query=mysql_query($sql);
			$rs = mysql_fetch_array($query);
			$rewardnum = $rs['class6'];
			$rewardnum = $rewardnum+1;
			$sql = "UPDATE `reward` set class6='".$rewardnum."' where rewardid = '".$usereward."'";
			$addResult = mysql_query($sql) or die("Error in query: $query. ".mysql_error()); 
		}
		if($times==2)
		{
			$sql="select class7 from reward where rewardid = '".$usereward."'";
			$query=mysql_query($sql);
			$rs = mysql_fetch_array($query);
			$rewardnum = $rs['class7'];
			$rewardnum = $rewardnum+1;
			$sql = "UPDATE `reward` set class7='".$rewardnum."' where rewardid = '".$usereward."'";
			$addResult = mysql_query($sql) or die("Error in query: $query. ".mysql_error()); 
		}
		if($times==3)
		{
			$sql="select class8 from reward where rewardid = '".$usereward."'";
			$query=mysql_query($sql);
			$rs = mysql_fetch_array($query);
			$rewardnum = $rs['class8'];
			$rewardnum = $rewardnum+1;
			$sql = "UPDATE `reward` set class8='".$rewardnum."' where rewardid = '".$usereward."'";
			$addResult = mysql_query($sql) or die("Error in query: $query. ".mysql_error()); 
		}
		
	}
	
	//echo "<script type='text/javascript'>alert('插入成功');location.href='http://127.0.0.1/nba-web/m/';</script>";
	
	echo "<script type='text/javascript'>btn1('invite');</script>";
	//echo "<script type='text/javascript'>location.href='http://127.0.0.1/nba-web/m/';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('验证码错误');location.href='./';</script>";
	}
	//echo $e;
	
	
	
	
?>
</html>


