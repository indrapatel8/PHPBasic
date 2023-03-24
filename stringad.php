<?php
$str = "This is * Cyber Team  * India";
$strtok = strtok($str,"*"); //it will split only first occurenance
$substr = explode("*",$str);

echo $str;
echo "<br>";
echo $strtok;
echo "<br>";
echo var_dump($substr);
echo "<br> Use of While Loop <br> ";
$count=0;
while($count<count($substr)){
		echo "<br>".$substr[$count];
		$count++;
}


echo "<hr> strpbrk : ".strpbrk("Team1 Cyber Team2 Team3","9");


?>