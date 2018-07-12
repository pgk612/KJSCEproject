<?php
session_start();
require("functions.php");
   
?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="design_forms.css"> 
  <link rel="stylesheet" type="text/css" href="personaldetails.css"> 
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
    <button class="dropbtn">Hello, 
    	 <?php echo $_SESSION['username'] ; ?>





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

<div class="bd">
<h2>


<div class="container2">

	
	<br><br>

	<div class ="personaldetails">
	<table>
		<tr>
			<th>NAME      </th>
			<td>
				 <?php 
  if(isset($_SESSION['username'])){

 	$usersData = getUsersData(getId($_SESSION['username']));
 
   

echo $usersData['name']; 
}
?>



			 </td>
		</tr>
		<tr>
			<th>ID NO</th>
			<td>
				 <?php 
  if(isset($_SESSION['username'])){

 	$usersData = getUsersData(getId($_SESSION['username']));
 
   

echo $usersData['idno']; 
}
?>



			 </td>
		</tr>
		<tr>
			<th>ROLL NO</th>
			<td>
				 <?php 
  if(isset($_SESSION['username'])){

 	$usersData = getUsersData(getId($_SESSION['username']));
 
   

echo $usersData['rollno']; 
}
?>



			 </td>
		</tr>
		<tr>
			<th>SEMESTER</th>
			<td>
				 <?php 
  if(isset($_SESSION['username'])){

 	$usersData = getUsersData(getId($_SESSION['username']));
 
   

echo $usersData['sem']; 
}
?>



			 </td>
		</tr>
		<tr>
			<th>DIVISION</th>
			<td>
				 <?php 
  if(isset($_SESSION['username'])){

 	$usersData = getUsersData(getId($_SESSION['username']));
 
   

echo $usersData['div']; 
}
?>



			 </td>
		</tr>
		




	</table>
	</div>

</div>

</h2>
</div>

</body>

</html>