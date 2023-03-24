<!DOCTYPE Html>
<html>

<style>
body{
background-color:rgb(255, 229, 204);
}
</style>

<h1 style="background-color:rgb(255, 215, 179);">Search for Books:</h1>
<body>

<form action="author_search.php" method="POST">

<fieldset>	
<legend>Search by Author:</legend>
  Author:<input type="text" name="Auth"></input><br>
  <button onclick="location.href='customer_page.php'" type="button">Go Back</button>
 <input type="submit" name="SubmitAuth" value="Search Author"></input>
</fieldset>
</form>

</body>
</html>

<?php
	$hostname='localhost';
	$username='root';
	$pwd='';
	
	$conn=mysqli_connect($hostname,$username,$pwd) or die('Database connection failed.');
	
	$db=mysqli_select_db($conn,'bookstore');

if(isset($_POST["SubmitAuth"])){
	$auth=$_POST['Auth'];
	$qs="SELECT Book_Id,Book_Name,Author FROM `book_info` WHERE Author LIKE'%$auth%' ";
	$k=0;
	if($run=mysqli_query($conn,$qs)){
		echo 'Books by ',$auth,':<br>';
		echo '-----------------------<br>';
	
		while($j=mysqli_fetch_assoc($run)){
			echo $j['Book_Id'].'| ';
			echo $j['Book_Name'].' | By ';
			echo $j['Author'].'<br>';
			$k++;
			}
	}
	echo '<br>Total books found: ',$k;
}



?>