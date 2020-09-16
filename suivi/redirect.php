<?php
include('session.php');

if($_SESSION['logged_user_info_type'] == "users")
{
	header("Location: dashboard.php");
}
// elseif ($_SESSION['logged_user_info_type'] == "parent")
// {
// 	header("Location: dashboard.php");
// }
else{
	header("Location: dashboard.php");
}



?>