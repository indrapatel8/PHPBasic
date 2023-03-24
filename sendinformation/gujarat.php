<?php
session_start();

if(isset($_POST['cmd'])){
	if($_POST['cmd']=="India"){
		header("Location: india.php");
	}
	else if($_POST['cmd']=="Back"){
		header("Location: index.php");
	}
}
?>
<h1>Welcome to Gujarat......</h1>
<?php


if(!empty($_SESSION["enroll"]))
	echo "From session is : ".$_SESSION["enroll"];
else
	echo "Something went wrong";
?>
<hr>
<h3>Student Detail:</h3>
<?php
if(isset($_GET['enroll'])){
  $enroll = $_GET['enroll'];
echo "Enrollment Number is : ".$enroll;
}
/*
  $name = $_POST['name'];
echo "</br>Name is : ".$name;

  $gender = $_POST['gender'];
echo "</br>Gender is : ".$gender;


  $hobby = $_POST['hobby'];
echo "</br>Hobby is : ".$hobby;

  $country = $_POST['country'];
echo "<br>Country is : ".$country;
}
*/
else 
	echo "Fill Studnet Information first";
?>




<form action="gujarat.php" method="post">
<input type="submit" name="cmd" value="Back"/></td>
<input type="submit" name="cmd" value="India"/></td>
</form>