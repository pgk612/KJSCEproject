
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


$sql = "INSERT INTO other (rollno,name_act,cond_by,start_date,end_date,certi)VALUES ($_POST[rollno], '$_POST[name_act]',' $_POST[cond_by]','$_POST[start_date]','$_POST[end_date]',' $_POST[certi]')"
or die("Error");


if ($conn->query($sql) === TRUE) {
    echo "<center>A New Entry for Other Acivity Added</center>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

					
