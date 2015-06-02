<?php
session_start();
if(isset($_GET['user']))
{
	if(!isset($_SESSION['user']))
	$_SESSION['user']=$_GET['user'];
	header("Location: chat.php");

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
	simple chat system	
	</title>
</head>
<body>
<form >
	<input type="text" name="user" required placeholder="enter user name">
	<input type="submit" >

</form>

</body>
</html>