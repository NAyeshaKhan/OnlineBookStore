<?php
	$hostname='localhost';
	$username='root';
	$pwd='';
	
	$conn=mysqli_connect($hostname,$username,$pwd) or die('Database connection failed.');
	mysqli_select_db($conn,'bookstore');

$q="SELECT * FROM `supplier_info`";
	$db=mysqli_select_db($conn,'bookstore');

	if($running=mysqli_query($conn,$q)){
		echo 'Current supplier information is: <br>';
		echo '----------------------------------------<br>';
	
	while($i=mysqli_fetch_assoc($running)){
	echo $i['Supplier_Id'].' | ';
	echo $i['Supplier_Name'].'; Address:';
	echo $i['Supplier_Address'].'; Contact:';
	echo $i['ContactNo'].' |';
	echo "<br>";
	}
	}else{
	echo "Supplier info could not be added. Please retry later.";
}

?>
<!DOCTYPE Html>
<html>

<style>
body{
background-color:rgb(209, 209, 224);
}
</style>
</html>