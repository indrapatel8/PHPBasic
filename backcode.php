<?php
$a = 10;
switch($a){
	case 1:	   display("One"); break;
	case 5:	   echo "</br>Five"; break;
	case 7:	   echo "</br>Seven"; break;
	default:	   echo "</br>Default";
}
function display($temp){
	echo "</br>".$temp;
}
function add($a , $b){
	return $a+$b;
}
echo "<hr>Sum is : ".add(33,33);
  class bcyber{
	  var $g=999;
	  function __construct($g,$k,$l){
           $this->$g = $g;
	  }
	   /* function __construct($d,$p){
           //$this->$g = $g;
	  } 
	   Fatal error: Cannot redeclare bcyber __construct::_
	  */
	  
		public function mul($a , $b){
			
			return $a/$b;
		}
	  function printG($g){
		  echo "<br><hr>Current value of G is :".$g;
	  }
	  
	  function __destruct(){
		  echo "</br>..... Tata Bye bye.....</br>";
	  }
  }
  
  $tt = new bcyber(4,5,7);
  
  echo "<hr>From bcyber : ".$tt->printG(66);
  
?>