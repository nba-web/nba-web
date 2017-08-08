function btn1($option){
	$login_slt = document.getElementById('login_slt').style; 
	$invite = document.getElementById('succeed').style; 
	$gift = document.getElementById('gift').style; 
	if($option=="login_slt"){
		//alert("1234");
		if($login_slt.display == 'block')
			$login_slt.display='none';
		else
			$login_slt.display='block';
	}else if ($option=="invite"){
		if($invite.display == 'block')
			$invite.display='none';
		else
		{
			$invite.display='block';
			$.ajax({
					url:'ab.php',
					type:'post',
					dataType:'json',
					data:{val1:phonetel},
					success:function(data){
					var str = data.val1;
					alert(str);
				}
				});
		}
	}else if($option=="gift"){
		if($gift.display == 'block')
		{	$gift.display='none';
			
		}
		else
		{
			$gift.display='block';
			alert(phonetel);
			$.ajax({
					url:'ab.php',
					type:'post',
					dataType:'json',
					data:{val1:phonetel},
					success:function(data){
					var str1 = data.val1;
					var str2 = data.val2;
					var str3 = data.val3;
					var str4 = data.val4;
					var str5 = data.val5;
					var str6 = data.val6;
					var str7 = data.val7;
					var str8 = data.val8;
					var str9 = data.val9;
					var str10 = data.val10;
					var str11 = data.val11;
					var str12 = data.val12;
					var str13 = data.val13;
					var str14 = data.val14;
					var str15 = data.val15;
					alert(data.val1);
					gift_num1.innerHTML=str1;
					gift_num2.innerHTML=str2;
					gift_num3.innerHTML=str3;
					gift_num4.innerHTML=str4;
					gift_num5.innerHTML=str5;
					gift_num6.innerHTML=str6;
					gift_num7.innerHTML=str7;
					gift_num8.innerHTML=str8;
					gift_num9.innerHTML=str9;
					gift_num10.innerHTML=str10;
					gift_num11.innerHTML=str11;
					gift_num12.innerHTML=str12;
					gift_num13.innerHTML=str13;
					gift_num14.innerHTML=str14;
					gift_num15.innerHTML=str15;
				}
				});
			
		}
	}
}

function mybtn(){
	var usemy_start=document.cookie.indexOf("phonena"); 
	if(usemy_start==-1){
		//alert(usemy_start);
		btn1('login_slt');
		
	}
	else {
		//alert(usemy_start);
		//btn1('open');
		btn1('invite');
	}
}

function denglubtn(){
	var aa = document.getElementById("mytel").value; 
	$.ajax({
					url:'login.php',
					type:'post',
					dataType:'json',
					data:{val1:aa},
					success:function(data){
					var str1 = data.val1;
					var str2 = data.val2;
					alert('登录成功');
					location.href='./'
				}
				});
}