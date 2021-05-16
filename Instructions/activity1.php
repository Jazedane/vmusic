<!DOCTYPE html>
<html>
<body>
<?php
	$Gasprice=2.51;
	if($Gasprice<=2.00){
		echo “Regular”;
	}
	else if($Gasprice>=2.01 && $Gasprice<=3.00){
		echo “Midgrade”;
	}
	else if($Gasprice>=3.01){
		echo “Premium”;
	}
	else {
		echo “Invalid”;
	}
?>
</body>
</html>