function $(objStr){return document.getElementById(objStr);}
   window.onload = function(){
    //分析cookie值，显示上次的登陆信息
    var userNameValue = getCookieValue("mytel");
    $("mytel").value = userNameValue;
  
    //写入点击事件
    $("submit").onclick = function()
    {
        var userNameValue = $("mytel").value;//取前台用户名的值

                setCookie("userName",$("userName").value,24,"/");
                setCookie("password",$("password").value,24,"/");
  
            alert("登陆成功,欢迎你," + userNameValue + "!");
            //self.location.replace("welcome.html");
        
    }
}