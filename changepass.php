<?php
session_start();
require("functions.php");


   
?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="design_forms.css"> 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script>
        function validate(){

            var a = document.getElementById("newpwd").value;
            var b = document.getElementById("cpwd").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script>


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
    <button class="dropbtn">    Hi, 
    	 <?php echo $_SESSION['username'] ; ?>


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
	 <a  class ="report" href="home.php">Report <i class="fa fa-caret-down"></i></a>
  <hr><a href="php/view_workshop.php">Workshops</a></hr>
  <hr><a href="php/view_courses.php">Courses</a></hr>
  <hr><a href="php/view_tpp.php">TPP</a></hr>
  <hr><a href="php/view_sports.php">Sports</a></hr>
  <hr><a href="php/view_competitions.php">Competitions</a></hr>
<hr><a href="php/view_otheractivity.php">Other Activities</a></hr>


  </div>


<div class="container3">
<center>
  <fieldset>

    <legend><u>Enter password</u></legend>

  <form  onSubmit="return validate()" action="php/changepassword.php" method="POST"">
    <table>

<!--   <tr>
    <td>Enter old password:</td>
    <td><input type="password" name="oldpwd" id="oldpwd"  required></td>
  </tr>
  <tr> -->

  <tr>
    <td>Enter new password:</td>
    <td><input style="color:white" type="password" name="newpwd" id="newpwd"  required></td>
  </tr>
  <tr>
    <td>Confirm password:</td>
    <td><input style="color:white" type="password" name="cpwd"  id="cpwd" required></td>
  </tr>

</table>
<br><br>    
<input type="submit" value="Confirm">
</form>
</fieldset>

</center>

    </div>




</body>


</html>