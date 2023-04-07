<?php

$eid = "";
$name = "";
$address = "";
$hobby = "";
$gender = "";

if (isset($_REQUEST['updateId'])) {
  $resultUpdate = mysqli_query($conn, "select * from employees where eid=" . $_REQUEST['updateId']);
  while ($field = $resultUpdate->fetch_array(MYSQLI_NUM)) {
    $eid = $field[0];
    $name = $field[1];
    $address = $field[2];
    $hobby = $field[3];
    $gender = $field[4];
  }
  mysqli_free_result($resultUpdate);
}

if (isset($_POST['submit'])) {
  if ($_POST['submit'] == "Submit") {

    if (isset($_POST['eid']) &&  $_POST['eid'] > 0) {
      //this is update mode is hidden field eid is available

      mysqli_query($conn, "update employees set ename='" . $_POST['name'] . "', eaddress='" . $_POST['address'] . "', hobby='" . implode(":", $_POST['hobbies']) . "', gender='" . $_POST['gender'] . "' where eid =" . $_POST['eid'] . "");
      if (mysqli_affected_rows($conn) == 1)
        echo "<h3>Employee Information Updated Succussfully</h3>";
      else {
        echo "<h3 style='color:red;'>Something went wrong, Please try again: " . mysqli_error($conn) . "</h3>";
      }
    } else {
      //this is insert mode
      //        $_POST['name']
      //      $_POST['address']
      // implode function will convert array to string with seprator
      //implode(":", $_POST['hobbies']);
      //echo "<br/>".$_POST['gender'];
      mysqli_query($conn, "insert into employees (`ename`, `eaddress`, `hobby`, `gender`) values ('" . $_POST['name'] . "','" . $_POST['address'] . "','" . implode(":", $_POST['hobbies']) . "','" . $_POST['gender'] . "')");
      if (mysqli_affected_rows($conn) == 1)
        echo "<h3>Employee Information Saved Succussfully</h3>";
      else {
        echo "<h3 style='color:red;'>Something went wrong, Please try again: " . mysqli_error($conn) . "</h3>";
      }
    }
  } else if ($_POST['submit'] == "Reset") {
    resetPHPValue();
  }
}

function resetPHPValue(){
  $eid = "";
  $name = "";
  $address = "";
  $hobby = "";
  $gender = "";
}