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

<h1 style="background-color:rgb(128, 255, 223);">Enter your information:</h1>
<body>

<form action="customer_update.php" method="POST">
<fieldset>
<legend>Update Customer Data</legend>

  Customer Id:<input type="text" name="custid"></input><br>
  First Name:<input type="text" name="fname"></input><br>
  Last Name:<input type="text" name="lname"></input><br>
  Address:<input type="text" name="address"></input><br>
  City:<input type="text" name="city"></input><br>
  Phone Number:<input type="text" name="phone"></input><br>
  
</fieldset>

<button onclick="location.href='customer_info.php'" type="button">Go Back</button>
  <input type="submit" name="Submit" value="Update customer info"></input>
  
</form>
</body>
</html>

<?php
	

if (isset($_POST['Submit'])){
	
	$custid=$_POST['custid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];	
	$city=$_POST['city'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];


    $q="UPDATE `customer_info` SET `FirstName`='$fname', `LastName`='$lname', `Address`='$address', `PhoneNumber`='$phone' WHERE `Customer_Id`='$custid' ";
	
	$run=mysqli_query($conn,$q);
      if($run){
		echo 'Customer info has been updated.';	
	  }else{
		  echo 'There has been an error. Please retry.';
	  }

}
?>