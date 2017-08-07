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

function mybtn(){
	var usemy_start=document.cookie.indexOf("name"); 
	if(usemy_start==-1){
		alert(usemy_start);
		btn1('open');
		
	}
	else {
		alert(usemy_start);
		//btn1('open');
		btn1('open_invite');
	}
}