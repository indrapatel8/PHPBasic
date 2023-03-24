<?php
session_start();
if(isset($_POST['submit'])){
	//to delete cookies also
	unset($_COOKIE['uname']);
	setcookie('uname', null, -1, '/'); 
	session_destroy();
}
if(!isset($_SESSION['username']))
	header("Location: first.php");
?>
<h1> :Welcome to Second Page: </h1>
You are Logged in as : <?php echo $_SESSION['username'];?>
<html>
<body>
<form method="post" action="second.php">
<input type="submit" value="Logout" name="submit"/>
</form>
</body>
</html>