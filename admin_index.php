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
  <h1><img   height="85" width="90" src="assets/logo1.png">

  Somaiya Vidyavihar
<img   height="85" width="90" src="assets/logo2.png"></h1>

</header>

<div class="container">
  
  <a href="admin_index.php">My Account</a>
  <a href="analysis.php">Analysis</a>

 

 <a href="contact.html">Contact Us</a>





<div class="clock">
    <div class="dropdown">
    <button class="dropbtn">Hi, 
    	 <?php echo $_SESSION['username'] ; ?>





	<i class="fa fa-caret-down"></i>  
    
    </button>
    <div class="dropdown-content">
      <a href="changepass_a.php">Change password</a>
      <a href="index.html">Log Out</a>
     
    </div>
  </div> 
   </div>


</div>
</div>

<div class="sidenav">
	 <a  class ="report" href="#">Report <i class="fa fa-caret-down"></i></a>
  <hr><a href="php/admin_view/view_workshop.php">Workshops</a></hr>
  <hr><a href="php/admin_view/view_courses.php">Courses</a></hr>
  <hr><a href="php/admin_view/view_tpp.php">TPP</a></hr>
  <hr><a href="php/admin_view/view_sports.php">Sports</a></hr>
  <hr><a href="php/admin_view/view_competitions.php">Competitions</a></hr>
<hr><a href="php/admin_view/view_otheractivity.php">Other Activities</a></hr>


  </div>

<div class="bd">
<h2>


<div class="container2">

	
	<br><br>

	<div class ="personaldetails">
	<table>
		<tr>
			<th>Name      </th>
			<td>
				 <?php 
  if(isset($_SESSION['username'])){

 	$usersData = getFacultyData(getFacultyID($_SESSION['username']));
 
   

echo $usersData['Name']; 
}
?>



			 </td>
		</tr>
		<tr>
			<th>Id No</th>
			<td>
				 <?php 
  if(isset($_SESSION['username'])){

 	$usersData = getFacultyData(getFacultyID($_SESSION['username']));
 
   

echo $usersData['ID']; 
}
?>



			 </td>
		</tr>
		<tr>
			<th>Type</th>
			<td>
				 <?php 
  if(isset($_SESSION['username'])){

 	$usersData = getFacultyData(getFacultyID($_SESSION['username']));
 
   

echo $usersData['Type']; 
}
?>

		
		




	</table>
	</div>

</div>

</h2>
</div>

</body>

</html>