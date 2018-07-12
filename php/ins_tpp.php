
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
//$pdf =addslashes($_FILES['certi']['tmp_name']);
//$pdf =base64_encode($pdf);

$sql = "INSERT INTO tpp (rollno,title,author,presented_at,paper)VALUES ($_POST[rollno], '$_POST[title]',' $_POST[author]','$_POST[presented_at]','$_POST[paper]')"
or die("Error");


if ($conn->query($sql) === TRUE) {
    echo "<center>A New Entry for TPP Added</center>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

					
