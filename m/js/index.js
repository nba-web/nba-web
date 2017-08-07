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
			$invite.display='block';
	}else if($option=="gift"){
		if($gift.display == 'block')
			$gift.display='none';
		else
			$gift.display='block';
	}
}

function mybtn(){
	var usemy_start=document.cookie.indexOf("name"); 
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