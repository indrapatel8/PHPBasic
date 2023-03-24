<!DOCTYPE html>
<html>
<body id="dem">
<?php

//phpinfo(INFO_ALL);

ini_set('display_errors', 1);  //o means hide, 1 for to all show
//https://www.php.net/manual/en/errorfunc.constants.php
error_reporting(E_ERROR);

//error_reporting(E_ALL & ~E_NOTICE);


//waring error
include('friday.php');
//notice error
$notice;
echo $notice;


$aa = 10.5;
$bb = 30.2;
$cint = "This is ";
$dint = "String";
$result = $aa + $bb ;
$result1 = $dint."".$cint;
 echo "Sum is : ....".(int)$result;
  echo "</br>Its Working....".is_int($result);
  echo "<br/>Its Working....".is_string($result1);
  $arr = array(1,2,3,4,5,1000);
  $arrAssoc = array("one"=>1,2,3,4,5,1000);
  
  echo "<br/>use of var_dump....".var_dump($arr);
  $foo = 1 + "10.5";                // $foo is float (11.5)
$foo = 1 + "-1.3e3";              // $foo is float (-1299)
echo "Value at ['One Index'] is : ".$arrAssoc["one"];
?>
<h1>String manipulation Functions:::</h1>
<?php
$str = "returns the portion of string specified. this is new line";
echo ucfirst($str)."<hr>";
$str = "0123456789012345678901234567890123456789";
echo wordwrap($str,10,"*<br>",TRUE);
echo "<hr>Word Count : ".substr_count($str,'01',10,strlen($str)-10);

echo "<hr>String Replace : ".substr_replace($str,"==",10,20);
echo "<hr>";
for($a=0;$a<strlen($str);$a++){
	echo "<br>".substr($str,0,$a);
}
echo "<hr>New String : ".substr($str,7,7);


str_friday('Fetal Error : ');

?>
</body>
</html>