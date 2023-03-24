<?php
interface det{
	function getName();
	function getID();
}
   class student implements det{
	 public $id=213;
	 public $name = "Harsh";
	   function getName(){
		   return $this->name;
	   }
	   function getId(){
		   return $this->id;
	   }
   }
$temp = new student();
echo $temp->getName();
?>