<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="../../design_forms.css"> 
<link rel="stylesheet" type="text/css" href="../../displayData.css"> 
</head>
<body style="background-color:#002664;">

<div class="flex-container">
<header>
  <h1>Somaiya Vidyavihar</h1>

</header>

<div class="container">
  
  <a href="../../home.html">Home</a>
  <div class="dropdown">
      <b> <button class="dropbtn">Login</button></b>
    <div class="dropdown-content">
      <a href="../../login.html">Student</a>
      <hr><a href="admin.html">Faculty</a></hr>
      
</div>
  </div>
 <a href="../../report.html">Report</a>
 <a href="../../contact.html">Contact Us</a>
</div>
</div>

<div class="sidenav">
     <a class ="report" href="#">Report</a>

  <hr><a href="view_workshop.php">Workshops</a></hr>
  <hr><a href="view_courses.php">Courses</a></hr>
  <hr><a href="view_tpp.php">TPP</a></hr>
  <hr><a href="view_sports.php">Sports</a></hr>
  <hr><a href="view_competitions.php">Competitions</a></hr>
<hr><a href="view_otheractivity.php">Other Activities</a></hr>

  </div>
  <div class="search1">
  Search By Date :   From<input type="date" name="search" placeholder="Search.."> 
  <br>

<div  class="to"> To <input type="date" name="search" placeholder="Search.."> </div>
  </div>
  <center>


<table style=" margin-left:100px; margin-top:40px;" border="3" solid white>
        <tr><th>  <span style='color:#AFA;'> Roll No.</th><th>Name of Competition</th><th>Conducted by</th><th>Rank</th><th>Start date</th><th>End date</th><th>Certificate</th> </span></tr>
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
$sql = "select * from competition";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0)
{
while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
echo "<tr><td > <span style='color:#AFA;'>  ". $line['rollno']."
    </td><td>  <span style='color:#AFA;'> ". $line['name_comp']."
    </td><td>  <span style='color:#AFA;'> ". $line['cond_by']."
    </td><td>  <span style='color:#AFA;'> ". $line['position']."
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


