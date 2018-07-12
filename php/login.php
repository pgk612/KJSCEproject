
<?php
session_start();

$servername = "localhost";
$u = "root";
$p = "";

$dbname = "kjsce";

// Create connection
$conn = new mysqli($servername, $u, $p, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

	
	} 
	echo "Successful Connection"."<br>";
	
 $username=$_POST['uname'];
 $password=$_POST['pword'];

$message="";
  if(isset($_POST['uname'])) {
      $username = $_POST["uname"];
      $_SESSION["username"] = $_POST["uname"];
     
      }
	   if(isset($_POST['pwd'])) {
      $password = $_POST["pword"];
      $_SESSION["pwd"] = $_POST["pwd"];
     
      }
	
	
	
	$result = mysqli_query($conn,"SELECT * FROM student WHERE username='$username' and password = '$password'");
	
	
	
	$count  = mysqli_num_rows($result);

	if($count>0) {
		$message = "Hey ".$_SESSION["username"];
		echo "<script>window.location='../index.php'</script>";
		
		echo $message;
		
	}
	else
	{
		echo "<script>window.location='../login.html';alert('Invalid User Name or Password !!')</script>";
	}

?>

			