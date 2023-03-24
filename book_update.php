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
background-color:rgb(180,180,200);
}
</style>

<h1 style="background-color:rgb(200,200,200);">Enter your information:</h1>
<body>

<form action="book_update.php" method="POST">
<fieldset>
<legend>Enter information you would like to update:</legend>

  Book Id:<input type="text" name="bookid"></input><br>
  Book Name:<input type="text" name="bookname"></input><br>
  Author:<input type="text" name="author"></input><br>
  ISBN:<input type="text" name="isbn"></input><br>
  Genre:<input type="text" name="genre"></input><br>
  Price:<input type="text" name="price"></input><br>
  
</fieldset>

<button onclick="location.href='book_info.php'" type="button">Go Back</button>
  <input type="submit" name="Submit" value="Submit your info"></input>
  
</form>
</body>
</html>

<?php
	if (isset($_POST['Submit']))
{
	$bookid=$_POST['bookid'];
	$bookname=$_POST['bookname'];
	$author=$_POST['author'];	
	$isbn=$_POST['isbn'];
	$genre=$_POST['genre'];
	$price=$_POST['price'];
	$q="UPDATE `book_info` SET `Book_Name`='$bookname', `ISBN`='$isbn', `Author`='$author', `Genre`='$genre', `Price`='$price' WHERE `Book_Id`='$bookid' ";
	
	$run=mysqli_query($conn,$q);
      if($run){
		echo 'Book information has been successfully updated.';	
	  }else{
	    echo 'Information could not be updated.';	
	    }
}
	
?>

	
	
