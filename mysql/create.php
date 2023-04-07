<?php
if(isset($_POST['submit'])){
    if($_POST['submit']=="Submit"){
//        $_POST['name']
  //      $_POST['address']
        // implode function will convert array to string with seprator
        //implode(":", $_POST['hobbies']);
        //echo "<br/>".$_POST['gender'];
        mysqli_query($conn, "insert into employees (`ename`, `eaddress`, `hobby`, `gender`) values ('".$_POST['name']."','".$_POST['address']."','".implode(":", $_POST['hobbies'])."','".$_POST['gender']."')");
if(mysqli_affected_rows($conn)==1)
        echo "<h3>Employee Information Saved Succussfully</h3>";
else{
  echo "<h3 style='color:red;'>Something went wrong, Please try again: ".mysqli_error($conn)."</h3>";
}

       }
       else if($_POST['submit']=="Reset"){
        echo "Reset";
       }
}
