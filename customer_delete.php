<?php
	$hostname='localhost';
	$username='root';
	$pwd='';
	
	$conn=mysqli_connect($hostname,$username,$pwd) or die('Database connection failed.');
	mysqli_select_db($conn,'bookstore');
?>

<!DOCTYPE Html>
<html>

<style>
body{
background-color:rgb(179, 255, 236);
}
</style>

<h1 style="background-color:rgb(128, 255, 223);">Delete Customer:</h1>
<body>

<form action="customer_delete.php" method="POST">
<fieldset>	
<legend>Delete By Id:</legend>
  Customer ID:<input type="text" name="custid"></input><br>
 
<button onclick="location.href='customer_info.php'" type="button">Go Back</button>
 <input type="submit" name="Submit" value="Delete ID"></input>
</fieldset>  
  
</form>
</body>
</html>

<?php
$db=mysqli_select_db($conn,'bookstore');

if(isset($_POST['Submit'])){
	$custid=$_POST['custid'];
	$qs="DELETE FROM `customer_info` WHERE Customer_Id='$custid' ";
	$qo="DELETE FROM `order_info` WHERE Customer_Id='$custid' ";
	$qp="DELETE FROM `payment_info` WHERE Customer_Id='$custid' ";
	
	if($run=mysqli_query($conn,$qp)){
		echo "Payment information was deleted successfully.<br>";
	}else{
		echo "Payment info could not be deleted.";
	}
	
	if($run=mysqli_query($conn,$qo)){
		echo "Order info was deleted successfully.<br>";
	}else{
		echo "Order could not be deleted.";
	}
	if($run=mysqli_query($conn,$qs)){
		echo "Customer info was deleted successfully.<br>";
	}else{
		echo "Record could not be deleted.";
	}
}

?>