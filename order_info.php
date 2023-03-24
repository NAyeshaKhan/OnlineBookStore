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

<form action="order_info.php" method="POST">
<fieldset>
<legend>Order Your Books:</legend>

  Enter your Customer Id:<input type="text" name="custid"></input><br>
  Enter ID of the Book you want to purchase:<input type="text" name="bookid"></input><br>
  Purchase Date as YYYY-MM-DD:<input type="text" name="date"></input><br>
  
</fieldset>
  <button onclick="location.href='customer_page.php'" type="button">Go Back</button>
  <input type="submit" name="Submit" value="Submit order info"></input>
  <br>
</form>
</body>
</html>

<?php
	

if (isset($_POST['Submit'])){
	
	$custid=$_POST['custid'];
	$bookid=$_POST['bookid'];
	$date=$_POST['date'];
	
	$q = "INSERT INTO `order_info`(`Customer_Id`,`Book_Id`, `Purchase_Date`) VALUES ('$custid','$bookid','$date')";
	
	$run=mysqli_query($conn,$q);
      if($run){
		echo 'Your order has been placed. Add method of payment if it is not already added.<br>';	
	  }else{
		  echo 'There has been an error. Please retry.';
	  }
	  $qs="SELECT Customer_Id,COUNT(o.Book_Id),SUM(b.Price) FROM `order_info` o join `book_info` b  on o.Book_Id=b.Book_Id WHERE Customer_Id='$custid' AND Purchase_Date='$date'";
	
	if($running=mysqli_query($GLOBALS['conn'],$qs)){
	while($i=mysqli_fetch_assoc($running)){
	echo "You have ordered: ";
	echo $i['COUNT(o.Book_Id)'].' books. Total price: ';
	echo 'Tk '.$i['SUM(b.Price)'].' on ';
	echo $date;
	echo "<br>";
	}
	
}
}
?>