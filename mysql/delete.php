<?php
if(isset($_REQUEST['delid'])){
    mysqli_query($conn, "delete from employees where eid = ".$_REQUEST['delid']);
if(mysqli_affected_rows($conn)==1)
        echo "<h3>Employee Information Deleted Succussfully</h3>";
else{
  echo "<h3 style='color:red;'>Something went wrong, Please try again: ".mysqli_error($conn)."</h3>";
}
}
?>