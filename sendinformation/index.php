<?php
session_start();
if(isset($_POST['cmd'])){
	if($_POST['cmd']=="Send"){
		$_SESSION["enroll"] = $_POST['enroll']." with session";
		header("Location: india.php?enroll=13213123&name=sdfsd&city=sdf&hobby=21321&gender=234&country=234");
		//$_POST['enroll'] = "revised enroll";

		//header("Location:india.php");
		die();
	}
}
?>
<html>
<body>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
<center>
<table border="1">
<tr><td colspan="2">Student Information</td></tr>
<tr><td>Enrollment No. : </td><td>
<input type="text" value="" name="enroll"/>
</td></tr>
<tr><td>Name : </td><td>
<input type="text" value="" name="name"/>
</td></tr>
<tr><td>Gender : </td><td>
<input type="text" value="" name="gender"/>
</td></tr>
<tr><td>Hobby : </td><td>
<input type="text" value="" name="hobby"/>
</td></tr>
<tr><td>Country : </td><td>
<input type="text" value="" name="country"/>
</td></tr>

<tr><td colspan="2" height="30px"><center>
		<input type="submit" name="cmd" value="Send"/></center></td>
</tr>
</table>
<hr>
</center>
</form>
</body>
</html>