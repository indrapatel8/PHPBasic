<?php
	echo "<hr>Method  Type : ".$_SERVER['REQUEST_METHOD']."<hr>";
	
foreach (getallheaders() as $name => $value) {
//    echo "<br>$name: $value\n";
}
	
 $enroll = $_GET['enroll'];
echo "Enrollment Number is : ".$enroll;

if(isset($_POST['cmd'])){
	if($_POST['cmd']=="Back"){
		header("Location: index.php");
	}
	else if($_POST['cmd']=="Gujarat"){
		header("Location: gujarat.php?enroll=New+Enrollment");
	}
}

?>
<h1>Welcome to India......</h1>
<hr>
<h3>Student Detail:</h3>
<?php
if(isset($_POST['enroll'])){
  $enroll = $_POST['enroll'];
echo "Enrollment Number is : ".$enroll;

  $name = $_POST['name'];
echo "</br>Name is : ".$name;

  $gender = $_POST['gender'];
echo "</br>Gender is : ".$gender;

  $hobby = $_POST['hobby'];
echo "</br>Hobby is : ".$hobby;

  $country = $_POST['country'];
echo "<br>Country is : ".$country;
}
else 
	echo "Fill Studnet Information first";
?>
<form action="india.php" method="post">
<input type="submit" name="cmd" value="Back"/></td>
<input type="submit" name="cmd" value="Gujarat"/></td>
</form>