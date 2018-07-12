<?php
session_start();
   
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="../design_forms.css"> 
<link rel="stylesheet" type="text/css" href="../displayData.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background-color:#002664;">

<div class="flex-container">
<header>
  <h1>Somaiya Vidyavihar</h1>

</header>

<div class="container">
  
  <a href="../index.php">My Account</a>
  <a href="../report.html">Report</a>
  <div class="dropdown">
      <b> <button class="dropbtn">Add New Activity</button></b>
    <div class="dropdown-content">
      <hr><a href="../workshop.php" >Workshops</a></hr>
  <hr><a href="../course.php">Courses</a></hr>
  <hr><a href="../tpp.php">TPP</a></hr>
  <hr><a href="../sports.php">Sports</a></hr>
  <hr><a href="../competition.php">Competitions</a></hr>
<hr><a href="../other_activity.php">Other Activities</a></hr>
      
</div>
  </div>
 <a href="../contact.html">View Progress</a>

 <a href="../contact.html">Contact Us</a>

<div class="clock">
    <div class="dropdown">
    <button class="dropbtn">Hello,  <?php echo $_SESSION['username'] ; ?>
    <i class="fa fa-caret-down"></i>  
    
    </button>
    <div class="dropdown-content">
      <a href="../home.html">Log Out</a>
     
    </div>
  </div> 
   </div>

<!--<a href="contact.html">Logout</a>-->
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
  <div class="search">
  
 <form action="searchws.php" method="POST">

<center>
  
  Search By Date :   From<input type="date" name="searchstart_date" placeholder="Search.."> 
  <br>

<div  class="to"> To <input type="date" name="searchend_date" placeholder="Search.."> </div>
  
  
<br>
<button >Search</button>


</center>
</form>
</div>
<center>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kjsce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sd=$_POST['searchstart_date'];
$ed=$_POST['searchend_date'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


mysqli_select_db($conn,"kjsce") or die("Connection Failed");
//$placename=$_POST["agencyid"];
//$aid=$_POST["agencyid"];
$sql = "SELECT *
FROM workshop
WHERE (start_date >= $sd
AND end_date <= $ed)";
$result=mysqli_query($conn,$sql);
if(!$result)
{
     echo "failed";
}
?>
<table style="margin-top:40px; margin-left: 20px" border="3" solid white>

        <tr><th>  <span style='color:#AFA;'> Roll No.</th><th>Name</th><th>Conducted by</th><th>Start date</th><th>End date</th><th>Certificate</th> </span></tr>
        <?php
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

