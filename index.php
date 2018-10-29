<?php 
if(isset($_POST['submit'])){ 
    $username = $_POST['user'];
	$password = $_POST['pass'];
    $dbHost = "localhost"; 
    $dbUser = "root";     
    $dbPass = "";         
    $dbDatabase = "quiz";  
     
    $db = mysqli_connect($dbHost,$dbUser,$dbPass,$dbDatabase) or die("Error connecting to database."); 
    mysqli_query($db,"INSERT INTO login VALUES('$username','$password')");
	mysqli_close($db);
	header("Location: quiz.html");
}
?>
<html>
<body>
<form action="index.php" method="post">
User Name:<br> 
<input type="text" name="user"><br><br>
Password:<br>
<input type="password" name="pass"><br><br>
<input type="submit" name="submit" value="Login"> 
</form> 
</body>
</html>