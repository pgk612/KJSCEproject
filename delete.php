<?php
session_start();
echo"delete page";

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

 if (isset($_GET['delws'])) {
 	$filename=$_GET['delws'];
 	$sql="delete from workshop where filename='$filename'";
 	if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}



 	 echo "<script>window.location='viewprogress.php';alert('Entry deleted !!')</script>";
 	
 	# code

 }


 if (isset($_GET['delcourse'])) {
 	$filename=$_GET['delcourse'];
 	$sql="delete from course where filename='$filename'";
 	if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}



 	 echo "<script>window.location='viewprogress.php';alert('Entry deleted !!')</script>";
 	
 	# code...
 }


  if (isset($_GET['deltpp'])) {
 	$filename=$_GET['deltpp'];
 	$sql="delete from tpp where filename='$filename'";
 	if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}



 	 echo "<script>window.location='viewprogress.php';alert('Entry deleted !!')</script>";
 	
 	# code...
 }



  if (isset($_GET['delsports'])) {
 	$filename=$_GET['delsports'];
 	$sql="delete from sports where filename='$filename'";
 	if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}



 	 echo "<script>window.location='viewprogress.php';alert('Entry deleted !!')</script>";
 	
 	# code...
 }


  if (isset($_GET['delcomp'])) {
 	$filename=$_GET['delcomp'];
 	$sql="delete from competition where filename='$filename'";
 	if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}



 	 echo "<script>window.location='viewprogress.php';alert('Entry deleted !!')</script>";
 	
 	# code...
 }


  if (isset($_GET['deloa'])) {
 	$filename=$_GET['deloa'];
 	$sql="delete from other where filename='$filename'";
 	if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}



 	 echo "<script>window.location='viewprogress.php';alert('Entry deleted !!')</script>";
 	
 	# code...
 }

mysqli_close($conn);
?>

			