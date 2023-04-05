<?php
//error_reporting(~E_ALL);
$conn = new mysqli("localhost","root","","db_cyber_wamp");
if($conn->connect_error!=null){
    die("Something Went Wrong....");
}
?>