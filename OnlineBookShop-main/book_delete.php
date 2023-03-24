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
background-color:rgb(230, 238, 255);
}
</style>

<h1 style="background-color:rgb(179, 203, 255);">Delete Books:</h1>
<body>

<form action="book_delete.php" method="POST">
<fieldset>	
<legend>Delete By Id:</legend>
  Book_ID:<input type="text" name="bookid"></input><br>

  <button onclick="location.href='book_info.php'" type="button">Go Back</button>
 <input type="submit" name="SubmitGen" value="Delete Id"></input>
</fieldset>  
  
</form>
</body>
</html>

<?php
$db=mysqli_select_db($conn,'bookstore');

if(isset($_POST['SubmitGen'])){
	$bookid=$_POST['bookid'];
	$qs="DELETE FROM `book_info` WHERE Book_Id='$bookid' ";
	
	if($run=mysqli_query($conn,$qs)){
		echo "Records were deleted successfully.";
	}else{
		echo 'Unsuccesful';
	}
}

?>