function $(objStr){return document.getElementById(objStr);}
   window.onload = function(){
    //����cookieֵ����ʾ�ϴεĵ�½��Ϣ
    var userNameValue = getCookieValue("mytel");
    $("mytel").value = userNameValue;
  
    //д�����¼�
    $("submit").onclick = function()
    {
        var userNameValue = $("mytel").value;//ȡǰ̨�û�����ֵ

                setCookie("userName",$("userName").value,24,"/");
                setCookie("password",$("password").value,24,"/");
  
            alert("��½�ɹ�,��ӭ��," + userNameValue + "!");
            //self.location.replace("welcome.html");
        
    }
}