<?php
session_start();
require("functions.php");
   
?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="design_forms.css"> 
   <link rel="stylesheet" type="text/css" href="note.css"> 

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body style="background-color:#002664;">

<div class="flex-container">
<header>
  <h1><img   height="85" width="90" src="assets/logo1.png">

  Somaiya Vidyavihar
<img   height="85" width="90" src="assets/logo2.png"></h1>

</header>

<div class="container">
  
 <a href="home.php">My Account</a>
  <a href="student_analysis.php">Analysis</a>
  <div class="dropdown">
      <b> <button class="dropbtn">Add New Activity <i class="fa fa-caret-down"></i></button></b>
    <div class="dropdown-content">
      <a  style="padding-top: 19px;"  href="workshop.php" >Workshops</a></hr>
  <hr><a href="course.php">Courses</a></hr>
  <hr><a href="tpp.php">TPP</a></hr>
  <hr><a href="sports.php">Sports</a></hr>
  <hr><a href="competition.php">Competitions</a></hr>
<hr><a  style="padding-bottom: 19px;" href="other_activity.php">Other Activities</a></hr>
      
</div>
  </div>
 <a href="viewprogress.php">View Progress</a>

 <a href="contact.html">Contact Us</a>

<div class="clock">
    <div class="dropdown">
    <button class="dropbtn">Hi, <?php echo $_SESSION['username'] ; ?>
	<i class="fa fa-caret-down"></i>  
    
    </button>
    <div class="dropdown-content">
     <a href="changepass.php">Change password</a>
       <hr>  <a href="index.html">Log Out</a></hr>
     
    </div>
  </div> 
   </div>

</div>
</div>

<div class="sidenav">
     <a class ="report" href="#">Report <i class="fa fa-caret-down"></i></a>

  <hr><a href="php/view_workshop.php">Workshops</a></hr>
  <hr><a href="php/view_courses.php">Courses</a></hr>
  <hr><a href="php/view_tpp.php">TPP</a></hr>
  <hr><a href="php/view_sports.php">Sports</a></hr>
  <hr><a href="php/view_competitions.php">Competitions</a></hr>
<hr><a href="php/view_otheractivity.php">Other Activities</a></hr>

  </div>
  <?php 
  if(isset($_SESSION['username'])){

  $usersData = getUsersData(getId($_SESSION['username']));
 
   

}
?>


<div class="container1">
<center>
  <fieldset>
 <legend><u>Enter Activity Details</u></legend>

 <form action="php/ins_otheractivity.php" method="POST"  enctype="multipart/form-data" >
<table>
  
  <tr>
    <td>Roll No:</td>
     <td><input type="text" name="rollno" value="<?php echo $usersData['rollno'];?>" readOnly></td>
  </tr>
  <tr>
    <td>Activity Name:</td>
    <td><input type="text" name="name_act" placeholder="Eg: Volunteering" required></td>
  </tr>
<tr>
    <td>Conducted By</td>
    <td><input type="text" name="cond_by" placeholder="Eg: U&I" required></td>
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
<input type="submit" value="Submit" name="btn">
</form>
</fieldset>
</center>

    </div>
	
    <div class="note">
<ul>
  <li>
    <a href="#">
      <h2>#1 Certificate name</h2>
      <p>Note : The certificate file name should be saved as srno_rollno. eg: Your first other activity certificate filename will be 1_<?php 
  if(isset($_SESSION['username'])){ $usersData = getUsersData(getId($_SESSION['username'])); echo $usersData['rollno']; } ?>, Second workshop certificate filename will be 2_<?php if(isset($_SESSION['username'])){ $usersData = getUsersData(getId($_SESSION['username'])); echo $usersData['rollno']; } ?>.</p>
    </a>
  </li>
  <li>
    <a href="#">
      <h2>#2 Certificate format</h2>
      <p>File should be in .docx or pdf format </p>
    </a>
  </li>

</ul>
</div>
</div>

</body>

</html>