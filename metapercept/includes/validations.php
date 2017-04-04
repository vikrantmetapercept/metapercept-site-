<?php
	
	function login(){
		
		if(empty($_POST['username'])){
			
			$error['username'] = "Please Enter Username";
				
		}
		else if(!filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
				
			$error['username'] = "Please Provide Email";
		}
			
		else if(empty($_POST['password'])){
				
			$error['password'] = "Please Enter Password";
		}
		
		return $error;
	}

?>