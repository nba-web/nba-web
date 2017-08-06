<!DOCTYPE html>
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
alert($.cookie('user'));
alert($.cookie('myinva'));
 </script>
 
 
<script src="js/index.js"></script>

</head>

<body><img src="../../game.gtimg.cn/images/slg/m/web201704/share_logo.jpg" tppabs="https://game.gtimg.cn/images/slg/m/web201704/share_logo.jpg" style="opacity: 0; position: absolute; bottom:0;left:0;" alt="">
	<header>
		<h1><a href="#" tppabs="http://slg.qq.com/m/main.shtml" onclick="void();">篮球大师<em style="color: #ffffff;font-size:50%;padding-top:15px">真实NBA经理人手游</em></a></h1>
		<a href="javascript:;" class="spr mygift_btn" onclick="PTTSendClick('header','mygift','我的礼包');">我的礼包</a>
		<a href="main.shtml.htm" tppabs="http://slg.qq.com/m/main.shtml" class="spr home_btn" onclick="PTTSendClick('header','home','进入官网');">进入官网</a>
	</header>
	
	<section class="s1">
		<a href="javascript:;" id="btn1" class="spr subscribe_btn subscribe_btn1" onclick="btn1('open')">立即预约</a>
	</section>
	<section class="s2">
		<a href="javascript:;"  class="spr btn ljyuzhang" onclick="btn1('open')">立即预约</a>
	</section>
	
	<section class="s5">
		<a href="javascript:;" onclick="btn1('open_invite')" class="spr invite_btn">邀请好友</a>
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
	<div class="sprbg popup invite" id="subscribe_popup">
		<a href="javascript:;" class="close_btn">关闭</a>
		<h3>恭喜您预约成功！</h3>
		<ul class="succeed_gift">
			<li>
				<img src="../../game.gtimg.cn/images/slg/act/a20170613subscribe/img27.jpg" tppabs="http://game.gtimg.cn/images/slg/act/a20170613subscribe/img27.jpg" alt="">
				<span>郭嘉将魂*10</span>
			</li>
			<li>
				<img src="../../game.gtimg.cn/images/slg/act/a20170613subscribe/img29.jpg" tppabs="http://game.gtimg.cn/images/slg/act/a20170613subscribe/img29.jpg" alt="">
				<span>紫色将魂*20</span>
			</li>
			<li>
				<img src="../../game.gtimg.cn/images/slg/act/a20170613subscribe/img25.jpg" tppabs="http://game.gtimg.cn/images/slg/act/a20170613subscribe/img25.jpg" alt="">
				<span>50000粮草*8</span>
			</li>
			<li>
				<img src="../../game.gtimg.cn/images/slg/act/a20170613subscribe/img20.jpg" tppabs="http://game.gtimg.cn/images/slg/act/a20170613subscribe/img20.jpg" alt="">
				<span>极品兵书*18</span>
			</li>
		</ul>
		<p class="topline">填写手机号码和好友邀请码共赢预约礼包</p>
		<ul class="input_list">
			<li>
				<strong>手机号:</strong>
				<input type="type" class="build_yourphone" value="" placeholder="输入您的手机号">
			</li>
			<li>
				<strong>邀请码:</strong>
				<input type="type" id="inviteCode" value="" placeholder="这里显示邀请码">
			</li>
		</ul>
		<div class="topline"></div>
		<a href="javascript:;" class="sprbg lijiyuyuez submit_btn">确定</a>
	</div>
	<div class="sprbg popup" id="succeed">
		<a href="javascript:void(0);" class="close_btn_succeed" onclick="btn1('close_invite')">关闭</a>
	</div>
	</body>

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
</html>