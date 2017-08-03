function btn1($option="open"){
	$login_slt = document.getElementById('login_slt').style; 
	if($option=="open"){
		//alert("1234");
		if($login_slt.display == 'block')
			$login_slt.display='none';
		else
			$login_slt.display='block';
	}else if ($option=="close"){
		
		
	}
}