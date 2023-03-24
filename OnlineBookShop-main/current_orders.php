<?php
	$hostname='localhost';
	$username='root';
	$pwd='';
	
	$conn=mysqli_connect($hostname,$username,$pwd) or die('Database connection failed.');
	mysqli_select_db($conn,'bookstore');

    $q = "SELECT o.Order_Id,c.FirstName,c.LastName, b.Book_Name,o.Purchase_Date FROM (`order_info` o join `customer_info` c on c.Customer_Id=o.Customer_Id) join `book_info` b on o.Book_Id=b.Book_Id";
	$db=mysqli_select_db($GLOBALS['conn'],'bookstore');

	if($running=mysqli_query($GLOBALS['conn'],$q)){
		echo 'Current order information: <br>';
		echo '--------------------------- <br>';
	
	while($i=mysqli_fetch_assoc($running)){
		echo $i['Order_Id'].' | ';
		echo $i['FirstName'].' ';
		echo $i['LastName'].' | ';
		echo $i['Book_Name'].' | Ordered on ';
		echo $i['Purchase_Date'];
		echo "<br>";
		}
	}else{
	echo "Order info could not be retrieved. Please retry later.";
}

?>

<!DOCTYPE Html>
<html>

<style>
body{
background-color:rgb(215,215,245);
}
</style>
</html>
