<?php
echo "<br><h2>: : Date Function : :</h2>";
echo "<br>".date("l");
echo "<br>".date("H");
echo "<br>".date("a");
echo "<br>".date("hh:mm:ss");
echo "<br>".date("j-F-Y");
// 20th-Feb-23 9:48AM
date_default_timezone_set("Asia/Kolkata");
echo "<br>".date("jS-M-y h:i:s A");
echo "<br>The time is " . date("h:i:sa");
echo "<hr><h3>All Time Zone </h3>";
$zone = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
for($x = 0; $x < count($zone); $x++) {
    echo "<br>".$zone[$x];
}
//.date_default_timezone_get()
//mktime(hour, minute, second, month, day, year)
$curr = date("hh:mm:ss",mktime(10,25,22,11,20,2023));
echo "<br><h2> New : ".$curr;
?>