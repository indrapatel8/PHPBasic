<?php
session_start();
/*
setcookie("uname", "mySecretPassword",
 time() + (86400 * 30),
 "/"); // 86400 = 1 day
*/
if(isset($_POST['submit'])){
    	$_SESSION['username'] = $_POST['username'];
	echo "<br>TRUE";
}
if(isset($_COOKIE['uname'])){
	$_SESSION['username'] = $_COOKIE['uname'];
	header("Location: second.php");
}
?>
<html>
<body>
<form method="post" action="first.php">
<input type="text" value="" name="username"/>
<br>
<input type="password" value="" name="password"/>
<br>
<input type="submit" value="Submit" name="submit"/>
</form>
</body>
</html>