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
background-color:rgb(224, 224, 235);
}
</style>

<h1 style="background-color:rgb(200,200,200);">Enter your information:</h1>
<body>

<form action="payment_info.php" method="POST">
<fieldset>
<legend>Add Method Of Payment:</legend>
  Enter Customer ID:<input type="text" name="custid"></input><br> 
  Credit Card Number:<input type="text" name="cardno"></input><br>
  Type:<input type="text" name="type"></input><br>
  
</fieldset>
  <button onclick="location.href='customer_page.php'" type="button">Go Back</button>
  <input type="submit" name="Submit" value="Submit payment info"></input>
  
</form>
</body>
</html>

<?php
	

if (isset($_POST['Submit'])){
	$custid=$_POST['custid'];
	$cardno=$_POST['cardno'];
	$type=$_POST['type'];



	$q = "INSERT INTO `payment_info`(`Customer_Id`,`CreditCard_No`,`Type`) VALUES ('$custid','$cardno','$type')";
	
	$run=mysqli_query($conn,$q);
      if($run){
		echo 'Payment Info has been added.';	
	  }else{
		  echo 'There has been an error. Please retry.';
	  }
}
?>