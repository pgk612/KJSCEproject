<?php
session_start();
require("functions.php");
   
?>

<<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="design_forms.css"> 
   <link rel="stylesheet" type="text/css" href="analysisdesign.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body style="background-color:#002664;">

<div class="flex-container">

<header>

  <h1>

<img   height="85" width="90" src="assets/logo1.png">

  Somaiya Vidyavihar
<img   height="85" width="90" src="assets/logo2.png">
  </h1>

</header>


<div class="container">
  
   <a href="home.php">My Account</a>
  <a href="student_analysis.php">Analysis</a>
  <div class="dropdown">
      <b> <button class="dropbtn">Add New Activity <i class="fa fa-caret-down"></i></button></b>
    <div class="dropdown-content">
      <a style="padding-top: 19px;"  href="workshop.php" >Workshops</a></hr>
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
<center>

<div class="search1">

  

<font color="white" align="center" style="margin-left:220px" size="75px" > Overall </font>
  

  
  <table style="margin-top:40px" border="3" solid white>
    <tr>
      <th> <span style='color:#AFA;'>Categories      </th>
      <th>First Year</th>
      <th> Second Year</th>
         
<th>Third Year</th>
<th>Fourth Year</th>
    </tr>
    
    <tr>
    
    
      <th>Workshops</th>
      <td>
         <?php 
  
    $ct=getcount(1,2,1);
    echo $ct; 

?>
</td>
       <td>
         <?php 
  
$ct=getcount(3,4,1);
echo $ct;

?>
</td>
<td>
         <?php 
  
$ct=getcount(5,6,1);
echo $ct;

?>
</td>
<td>
         <?php 

  $ct=getcount(7,8,1);
echo $ct;  

?>
</td>
    </tr>
    <tr>
      <th>Courses</th>
      <td>
         <?php 
 
$ct=getcount(1,2,2);
echo $ct;

?></td>
  <td>
         <?php 
  
$ct=getcount(3,4,2);
echo $ct;

?></td>
  <td>
         <?php 
 
$ct=getcount(5,6,2);
echo $ct;

?></td>
  <td>
         <?php 
 
$ct=getcount(7,8,2);
echo $ct;

?></td>

</tr>
    
    

  <tr>
      <th>TPP</th>
      
      <td>
         <?php 
  
$ct=getcount(1,2,3);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(3,4,3);
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getcount(5,6,3);
echo $ct;

?></td>
  <td>
         <?php 
  
$ct=getcount(7,8,3);
echo $ct;

?></td>





</tr>
  <tr>
      <th>Sports</th>
      <td>
         <?php 
  
 $ct=getcount(1,2,4);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(3,4,4);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(5,6,4);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(7,8,4);
echo $ct;

?></td>

</tr>
  <tr>
      <th>Competitions</th>
      <td>
         <?php 
  
 $ct=getcount(1,2,5);
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getcount(3,4,5);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(5,6,5);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(7,8,5);
echo $ct;

?></td>

</tr>


  <tr>
      <th>Other Activities</th>
            <td>
         <?php 
  
 $ct=getcount(1,2,6);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(3,4,6);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(5,6,6);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(7,8,6);
echo $ct;

?></td>
</tr>
</table>
</center>
</div>
<center>

<br>
  
   
<a style="color: white; font-size: 30px;" href="student_graphical.php">Click here for Graphical analysis</a>

<!-- This starts the graph section.-->



  
  </div>

 

</center>
</div>
</h2>
</div>


</body>
</html>

