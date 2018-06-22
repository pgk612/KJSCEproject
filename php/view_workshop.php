<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="../design_forms.css"> 
<link rel="stylesheet" type="text/css" href="../dt.css"> 
</head>
<body style="background-color:#002664;">

<div class="flex-container">
<header>
  <h1>Somaiya Vidyavihar</h1>

</header>

<div class="container">
  
  <a href="index.html">Home</a>
  <div class="dropdown">
      <b> <button class="dropbtn">Login</button></b>
    <div class="dropdown-content">
      <a href="login.html">Student</a>
      <hr><a href="admin.html">Faculty</a></hr>
      
</div>
  </div>
 <a href="report.html">Report</a>
 <a href="contact.html">Contact Us</a>
</div>
</div>

<div class="sidenav">
  <hr><a href="../workshop.html">Workshops</a></hr>
  <hr><a href="../course.html">Courses</a></hr>
  <hr><a href="../tpp.html">TPP</a></hr>
  <hr><a href="../sports.html">Sports</a></hr>
  <hr><a href="../competition.html">Competitions</a></hr>
<hr><a href="../other_activity.html">Other Activities</a></hr>
<hr></hr>
  </div>
  <center>
  

  <br><br><br>
    <table border="3" solid white >

        <tr><th>  <span style='color:#AFA;'> Roll No.</th><th>Name</th><th>Conducted by</th><th>Start date</th><th>End date</th><th>Certificate</th> </span></tr>
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


mysqli_select_db($conn,"kjsce") or die("Connection Failed");
//$placename=$_POST["agencyid"];
//$aid=$_POST["agencyid"];
$sql = "select * from workshop";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0)
{
while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
echo "<tr><td > <span style='color:#AFA;'>  ". $line['rollno']."
    </td><td>  <span style='color:#AFA;'> ". $line['namew']."
    </td><td>  <span style='color:#AFA;'> ". $line['con_by']."
    </td><td>  <span style='color:#AFA;'> ". $line['start_date']." 
    </td><td>  <span style='color:#AFA;'> ". $line['end_date']." 
    </td><td>  <span style='color:#AFA;'> ".$line['certi']."
    </span> </td></tr>";
  
//echo '<tr><td> <span style="color:#AFA;text-align:center;">  '. $line['rollno'].'</td><td>'. $line['namew'].'</td><td>'. $line['con_by'].'</td><td>'. $line['start_date'].'</td><td>'. $line['end_date'].'</td><td>'.$line['certi'].'</span> </td></tr>';
  

    
}
}
else
{
  echo "<center><font size='5'> NO ENTRIES FOUND </font></center>";
}
$conn->close();
?>


</table>

  </center>


</body>

</html>


