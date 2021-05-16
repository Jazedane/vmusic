<!DOCTYPE html>
<html>
<body>
<?php
  $count=0;
  $numbers=array();
    echo “yes! ”;
    
  while($count>100){
			$numbers[$count]=$count+1;
      $count++;
        echo $numbers[$count];
        echo “got it.”; 
  }
?>
</body>
</html>