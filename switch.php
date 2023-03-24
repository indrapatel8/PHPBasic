<html>
<body>
<?php
  include("backcode.php");
  echo "</br> Sum from Thurday : ".add(99,1000);
  $t = new bcyber(44);
  echo "</br> Mul from Thurday : ".$t->mul(100,10);
  echo "</br> g from Thurday : ".$t->g; //44
  $t->printG(33);
?>
</body>
</html>