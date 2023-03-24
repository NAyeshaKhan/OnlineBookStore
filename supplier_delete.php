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
background-color:rgb(209, 209, 224);
}
</style>

<h1 style="background-color:rgb(215,195,250);">Delete Supplier:</h1>
<body>

<form action="supplier_delete.php" method="POST">
<fieldset>	
<legend>Delete By Id:</legend>
  ID:<input type="text" name="suppid"></input><br>


  <button onclick="location.href='supplier_info.php'" type="button">Go Back</button>
<input type="submit" name="Submit" value="Delete ID"></input>
</fieldset>  
  
</form>
</body>
</html>

<?php
$db=mysqli_select_db($conn,'bookstore');

if(isset($_POST['Submit'])){
	$suppid=$_POST['suppid'];
	$qs="DELETE FROM `supplier_info` WHERE Supplier_Id='$suppid' ";
	
	if($run=mysqli_query($conn,$qs)){
		echo "Records were deleted successfully.";
	}else{
		echo "Record could not be deleted, or it doesn't exist";
	}
}

?> 