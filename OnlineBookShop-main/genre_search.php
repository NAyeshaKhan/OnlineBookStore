<!DOCTYPE Html>
<html>

<style>
body{
background-color:rgb(255, 229, 204);
}
</style>


<h1 style="background-color:rgb(255, 215, 179);">Search for Books:</h1>
<body>

<form action="genre_search.php" method="POST">


<fieldset>	
<legend>Search by Genre:</legend>
  Genre:<input type="text" name="Gen"></input><br>
  <button onclick="location.href='customer_page.php'" type="button">Go Back</button>
 <input type="submit" name="SubmitGen" value="Search Genre"></input><br> 
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

if (isset($_POST['SubmitGen'])){
	$gen=$_POST['Gen'];
	$q="SELECT * FROM `book_info` WHERE Genre='$gen'";
	$c=0;
	if($running=mysqli_query($conn,$q)){
		echo 'Books of ',$gen, ' genre:<br>';
		echo '------------------------------<br>';
	
		while($i=mysqli_fetch_assoc($running)){
		$c++;
		echo $i['Book_Id'].', ';
		echo $i['Book_Name'].' | ';
		echo $i['Author'].' | Tk.';
		echo $i['Price'].'<br>';
		}
		echo '<br>Total ',$c,' books found.' ;
	}
}

?>