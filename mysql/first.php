<?php
    $conn = new mysqli("localhost","root","","db_cyber_wamp");
    echo var_dump($conn);

    if($conn->connect_error!=null){
        echo "Something Went Wrong..";
    }else
    echo "Connection Successfull";


 //mysqli_query($conn, "insert into emp values(101,'Rajen')");
 mysqli_query($conn, "update emp set ename='Krishna' where eid =1");


 //mysqli_stmt_affected_rows
 echo "<h1>Updated record : ".mysqli_affected_rows($conn);
 if(mysqli_errno($conn)==1062)
  echo "<br>EMp No is already available.. choose another</br>";
  else
 echo "Error Due to This : ".mysqli_error($conn);
 //echo "<br>Error Due to This : ".mysqli_errno($conn);
 
 echo "<h2>";
 $result = mysqli_query($conn, "select * from emp");
 echo "<hr>Method 1 : result -> fetch_array";
 echo "<table border=1><tr><td>Emp No</td><td>Emp Name</td></tr>";
 while ($field = $result -> fetch_array(MYSQLI_NUM))
     echo "<tr><td>".$field[0]."</td><td>".$field[1]."</td></tr>";
 echo "</table></hr>";


   
/* fetch associative array */
$result2 = mysqli_query($conn, "select * from emp");
echo "<hr>Method 2 : result -> fetch_assoc";
 echo "<table border=1><tr><td>Emp No</td><td>Emp Name</td></tr>";
while ($row = $result2->fetch_assoc()) {
    echo "<tr><td>".$row["eid"]."</td><td>".$row["ename"]."</td></tr>";
}
echo "</table></hr>";

//echo var_dump(mysqli_fetch_all($result));

//mysqli_fetch all
//mysqli_fetch array
//mysqli_fetch_assoc
//mysqli_fetch_row
//mysqli_num_rows


   //Closing the statement
   mysqli_free_result($result);
   mysqli_free_result($result2);


    $conn->close();
    // mysqli_close();
    //mysqli_connect();
?>