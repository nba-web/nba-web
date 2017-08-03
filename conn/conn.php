<?php
@header("Content-Type:text/html;   charset=UTF-8");
/********************************************************/
//连接数据库
function database_connect()
{
	mysql_connect("localhost", "root", "292215");
	mysql_select_db("nbaweb");
	mysql_query("set names utf8");
}


/***********************************************************************/
//替换字符串中的特殊字符(在特殊字符前加反斜杠)
function replacestr($str_)
{
	$str_ = addcslashes($str_,"'\"");
	return $str_;
}

/***********************************************************************/
//去掉字符串里特殊字符前的反斜杠
function returnstr($str_)
{
    $str_=stripcslashes($str_);
	return $str_;
}

/***********************************************************************/
//将字符串减到指定长度
function iSubStr ($str, $len) {    
    $i = 0;    
    $tlen = 0;    
    $tstr = '';    
    while ($tlen < $len) {    
        $chr = mb_substr($str, $i, 1, 'utf8');    
        $chrLen = ord($chr) > 127 ? 2 : 1;    
        if ($tlen + $chrLen > $len) break;    
        $tstr .= $chr;    
        $tlen += $chrLen;    
        $i ++;    
    }    
    if ($tstr != $str) {    
        $tstr .= '...';    
    }    
    return $tstr;    
}  

/***********************************************************************/
//检查管理员是否登录
function checkLogin($id)
{
    @session_start();
	if(!isset($_SESSION['sid']))
	{
		echo "<script language='javascript'>alert('请先登录！');parent.location.href='index.php';</script>";
	}
	if($id==0)return;
}
?>