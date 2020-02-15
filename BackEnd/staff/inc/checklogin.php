<?php
function check_login()
{
if(strlen($_SESSION['s_id'])==0)
	{
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="staff_login.php";
		$_SESSION["s_id"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>
