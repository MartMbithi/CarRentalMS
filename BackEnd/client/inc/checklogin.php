<?php
function check_login()
{
if(strlen($_SESSION['c_id'])==0)
	{
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="client_login.php";
		$_SESSION["c_id"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>
