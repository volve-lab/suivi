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
		$role_id = $arr['user_type_id'];
		
		$query2 = "SELECT * FROM usertype WHERE id='$role_id' AND deleted != 'yes'";
		$query2 = $conn->query($query2);
		$row = $query2->fetch_assoc();
		$role = $row['name'];
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