<?php  
	// @Author: Rupam Datta
	// 
	// @Description: This function checks for an ongoing session. 
	//
	// @Return: string/boolean. Returns a string, the session name if there is an ongoing session otherwise returns a boolean, false
	function checkSession() {
		if(!isset($_SESSION)) { 
	        session_start(); 
	    } 
	
		if (count($_SESSION) > 0 && $_SESSION["user"]) {
			return $_SESSION["user"];	
		} else {
			return false;
		}	
	}
	
?>