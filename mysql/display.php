
<center><h2>: Registered Employee Information : </h2>
<table>
  <thead>
    <tr>
    <th>Sr No</th>  
    <th>Name</th>
      <th>Address</th>
      <th>Hobby</th>
      <th>Gender</th>
      <th>Action</th>      
    </tr>
  </thead>
  <tbody>

<?php
 $result = mysqli_query($conn, "select * from employees");
 $count=1;
 // <a href ='mysql_php_crud.php?id=".$field[0].">Delete</a></td>
 while ($field = $result -> fetch_array(MYSQLI_NUM))
    { echo "<tr><td>".$count++."</td><td>".$field[1]."</td><td>".$field[2]."</td><td>".$field[3]."</td><td>".$field[4]."</td><td><button class='action-btn'>Update</button><a href ='mysql_php_crud.php?delid=$field[0]'>Delete</a></td></tr>";
    }
mysqli_free_result($result);
?>
    
</tbody>
</table>
</center>