<?php 
	include '../conn/conn.php';
	//
	$userid = trim($_POST['userid']);
	$password = trim($_POST['password']);
	$password = md5($password);
	
	class user{
		public $userid;
		public $password;

		function __construct($userid,$pwd) {
			$this->userid = $userid;
			$this->password = $pwd;	
		}

		function checkUser(){
			database_connect();
			// 查询登录用户
			$sql = "select * from users where _uid='" . $this->userid ."'";
			$result = mysql_query($sql);
			$userInfo = mysql_fetch_array($result);

			if($userInfo == false){
				echo "<script type='text/javascript'>alert('用户不存在！');history.go(-1)</script>";
				exit;
			} else {
				if($userInfo['_pwd'] == $this->password){
					session_start();
					$_SESSION['id'] = $userInfo['_id'];
					$_SESSION['uid'] = $userInfo['_uid'];
					$_SESSION['role'] = $userInfo['_role'];

					//header("location:index.php");

					echo "<script type='text/javascript'>location.href='../index.php'</script>";
				} else {
					
					echo "<script type='text/javascript'>alert('密码错误');history.go(-1)</script>";
					exit;
				}
			}
		}
	}
	$obj = new user($userid,$password);
	$obj->checkUser();
?>