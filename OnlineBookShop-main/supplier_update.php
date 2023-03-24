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

<h1 style="background-color:rgb(200,200,200);">Enter your information:</h1>
<body>

<form action="supplier_update.php" method="POST">
<fieldset>
<legend>Update Supplier Data</legend>
  Supplier ID:<input type="text" name="suppid"></input><br>
  Supplier Name:<input type="text" name="suppname"></input><br>
  Address:<input type="text" name="suppaddress"></input><br>
  Contact Number:<input type="text" name="contact"></input><br>
  
</fieldset>

<button onclick="location.href='supplier_info.php'" type="button">Go Back</button>
  <input type="submit" name="Submit" value="Update supplier info"></input>
  
</form>
</body>
</html>

<?php
	

if (isset($_POST['Submit'])){
	
	$suppid=$_POST['suppid'];
	$suppname=$_POST['suppname'];
	$suppaddress=$_POST['suppaddress'];
	$contact=$_POST['contact'];


	$q="UPDATE `supplier_info` SET `Supplier_Name`='$suppname', `Supplier_Address`='$suppaddress', `ContactNo`='$contact' WHERE `Supplier_Id`='$suppid' ";
	
	$run=mysqli_query($conn,$q);
      if($run){
		echo 'Supplier Info has been Updated.';	
	  }else{
		  echo 'There has been an error. Please retry later.';
	  }
}
?>