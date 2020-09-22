<?php
include("lib/config/config.php");
session_start(); // Starting Session
// Storing Session
if(!isset($_SESSION['logged_user_info']) || !isset($_SESSION['logged_user_info_type']))
{
	header('Location: logout.php'); // Redirecting To Home Page
}
else
{
	if($_SESSION['logged_user_info_type'] == "users")
	{
		$user_check=$_SESSION['logged_user_info'];
		// SQL Query To Fetch Complete Information Of User
		$query="SELECT * FROM users WHERE id = '$user_check'";
		$query = $conn->query($query);
		$arr = $query->fetch_array();
		$user_id = $arr['id'];
		$names = $arr['username'];
		$role = $arr['user_type_id'];
		// $phone = $arr['phone'];
	}
	else
	{
	?>
		<script>
		window.location = '/logout.php';
		</script>
	<?php
	}
}
if(!isset($user_id))
{
?>
	<script>
	window.location = '/index.php';
	</script>
<?php
}
?>