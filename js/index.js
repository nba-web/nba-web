function btn1($option){
	$login_slt = document.getElementById('login_slt').style; 
	$invite = document.getElementById('succeed').style; 
	if($option=="open"){
		//alert("1234");
		if($login_slt.display == 'block')
			$login_slt.display='none';
		else
			$login_slt.display='block';
	}else if ($option=="close_invite"){
		//alert("open_invite");
		$invite.display='none';
	}
	else if($option=="open_invite"){
		//alert("open");
		$invite.display='block';
	}
}

function btn2($option){
	if($option=="code"){
		alert("我是验证码！");
	}else if($option=="submit_1"){
		//document.getElementById('mreg_appoint').submit();
		//return false;
		alert("submit_1");
	}else if($option=="submit_2"){
		//document.getElementById('mreg_appoint').submit();
		//return false;
		alert("submit_2");
	}
}