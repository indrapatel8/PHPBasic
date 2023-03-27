<?php
class myCyber extends Exception{
//you can seprate this class in another php file and include as below to seprate your code	
     //include("myException.php");

  //function __construct(){  }	  

  function dispalyMessage($msg){
	  echo "Error from custom class with message : $msg ";
  }
}


function myCustomHandler($errno, $errstr, $errfile, $errline) {
    print "<table><tr><td><hr> $errno <h1>".$errstr." at :: $errline</h1></td></tr></table>";
}

set_error_handler('myCustomHandler');

$a = 100;

//to check weather finally is calling or not
//die();

try{
if($a>=100){
  echo $a/10;	
  //throw new Exception("Exception due to Monday");
  throw new myCyber("Exception due to Monday"); // this is custom exception
}else if($a<100){
	
}
else{
}
 trigger_error("A custom error has been triggered from custom functino");
}
catch(myCyber $e){
    echo "Mane Avdi gayu : $e";
}
catch(DivisionByZeroError $e){
    echo "Error Due to this Message";
}
catch(ErrorException $e) {
    echo "ErrorException ===  $e";
}
catch(Exception $e){
	echo "Error Due to Zero : ".$e;
}
finally{
	echo "<hr>Thanks for.... Coding Again,.<hr>";
}
?>