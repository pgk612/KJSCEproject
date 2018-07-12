<?php
session_start();

   
?>




<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="design_forms.css"> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body style="background-color:#002664;">

<div class="flex-container">
<header>
  <h1>Somaiya Vidyavihar</h1>

</header>

<div class="container">
  
  <a href="index.php">My Account</a>
  <a href="report.html">Report</a>
  <div class="dropdown">
      <b> <button class="dropbtn">Add New Activity</button></b>
    <div class="dropdown-content">
      <hr><a href="workshop.php" >Workshops</a></hr>
  <hr><a href="course.php">Courses</a></hr>
  <hr><a href="tpp.php">TPP</a></hr>
  <hr><a href="sports.php">Sports</a></hr>
  <hr><a href="competition.php">Competitions</a></hr>
<hr><a href="other_activity.php">Other Activities</a></hr>
      
</div>
  </div>
 <a href="contact.html">View Progress</a>

 <a href="contact.html">Contact Us</a>

<div class="clock">
    <div class="dropdown">
    <button class="dropbtn">Hello, <?php echo $_SESSION['username'] ; ?>
	<i class="fa fa-caret-down"></i>  
    
    </button>
    <div class="dropdown-content">
      <a href="home.html">Log Out</a>
     
    </div>
  </div> 
   </div>
<!--<a href="contact.html">Logout</a>-->
</div>
</div>

<div class="sidenav">
   <a class ="report" href="home.html">Report</a>
  <hr><a href="php/view_workshop.php">Workshops</a></hr>
  <hr><a href="php/view_courses.php">Courses</a></hr>
  <hr><a href="php/view_tpp.php">TPP</a></hr>
  <hr><a href="php/view_sports.php">Sports</a></hr>
  <hr><a href="php/view_competitions.php">Competitions</a></hr>
<hr><a href="php/view_otheractivity.php">Other Activities</a></hr>


  </div>


<div class="container1">
<center>
<u><h2>Enter Competition Details</h2></u>

  <form action="php/ins_competitions.php" method="POST">
<table>
  
  <tr>
    <td>Roll No:</td>
    <td><input type="text" name="rollno"  placeholder="Eg: 1511020" required></td>
  </tr>
  <tr>
    <td>Competition Name:</td>
    <td><input type="text" name="name_comp" placeholder="Eg: Hackathon" required></td>
  </tr>
<tr>
    <td>Conducted By</td>
    <td><input type="text" name="cond_by" placeholder="Eg: DJSCE" required></td>
  </tr>
<tr>
    <td>Position:</td>
    <td><select name="position" required>
    <option value="participant">Participant</option>
    <option value="First">First</option>
    <option value="Second">Second</option>
    <option value="Third">Third</option>
  </select></td>
  </tr>
  <tr>
    <td>Start Date:</td>
    <td><input type="date" name="start_date"  required></td>
  </tr>
<tr>
    <td>End Date:</td>
    <td><input type="date" name="end_date" required></td>
  </tr>
<tr>
    <td>Attach Certificate:</td>
    <td><input type="file" name="certi" required></td>
  </tr>
</table>
<br><br>    
<input type="submit" value="Submit">
</form>
</center>

    </div>
</div>

</body>

</html>