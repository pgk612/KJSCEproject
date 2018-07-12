<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kjsce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "";

$sql = "INSERT INTO competition (rollno,name_comp,cond_by,position,start_date,end_date,certi)VALUES ($_POST[rollno], '$_POST[name_comp]',' $_POST[cond_by]',' $_POST[position]','$_POST[start_date]','$_POST[end_date]',' $_POST[certi]')"
or die("Error");


if ($conn->query($sql) === TRUE) {
    echo "<center>A New Entry for Competitions Added</center>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



					
