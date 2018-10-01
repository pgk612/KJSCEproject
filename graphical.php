<?php
session_start();
require("functions.php");
   
?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="design_forms.css"> 
  <link rel="stylesheet" type="text/css" href="personaldetails.css"> 

<script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>

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
	 <a  class ="report" href="home.php">Report <i class="fa fa-caret-down"></i></a>
  <hr><a href="php/admin_view/view_workshop.php">Workshops</a></hr>
  <hr><a href="php/admin_view/view_courses.php">Courses</a></hr>
  <hr><a href="php/admin_view/view_tpp.php">TPP</a></hr>
  <hr><a href="php/admin_view/view_sports.php">Sports</a></hr>
  <hr><a href="php/admin_view/view_competitions.php">Competitions</a></hr>
<hr><a href="php/admin_view/view_otheractivity.php">Other Activities</a></hr>


  </div>

<center>


<center>

<br>
  
   
    
 
<!-- This starts the graph section.-->

<div class="search2">
   <div id="chart"></div>
   <font color="white" align="center" style="margin-left:100px" size="30px" > Graphical analysis </font><br><br>
	<div id="container" style="width: 50%; height: 50%"></div>

    <script>
      anychart.onDocumentReady(function() {
 
        // set the data
        //Workshops
        var fe_ws=<?php echo json_encode(getcount(1,2,1));?>;
        var se_ws=<?php echo json_encode(getcount(3,4,1));?>;
        var te_ws=<?php echo json_encode(getcount(5,6,1));?>;
        var be_ws=<?php echo json_encode(getcount(7,8,1));?>;

        var data = {
            header: ["YEAR", "NUMBER"],
            rows: [
              ["FE", fe_ws],
              ["SE", se_ws],
              ["TE", te_ws],
              ["BE", be_ws]
        ]};
 
        // create the chart
			 var chart = anychart.column();
			chart.data(data);
			chart.title("Workshops Attended ");
			chart.container("container");
			chart.draw();
			      });

    </script><br><pr>
    
    <script>
    //courses
      anychart.onDocumentReady(function() {
 
        // set the data
        var fe_cs=<?php echo json_encode(getcount(1,2,2));?>;
        var se_cs=<?php echo json_encode(getcount(3,4,2));?>;
        var te_cs=<?php echo json_encode(getcount(5,6,2));?>;
        var be_cs=<?php echo json_encode(getcount(7,8,2));?>;

        var data = {
            header: ["YEAR", "NUMBER"],
            rows: [
              ["FE", fe_cs],
              ["SE", se_cs],
              ["TE", te_cs],
              ["BE", be_cs]
        ]};
 
        // create the chart
			 var chart = anychart.column();
			chart.data(data);
			chart.title("Courses Studied ");
			chart.container("container");
			chart.draw();
			      });
      
    </script>
      <script>
      //TPP
      anychart.onDocumentReady(function() {
 
        // set the data
        var fe_ws=<?php echo json_encode(getcount(1,2,3));?>;
        var se_ws=<?php echo json_encode(getcount(3,4,3));?>;
        var te_ws=<?php echo json_encode(getcount(5,6,3));?>;
        var be_ws=<?php echo json_encode(getcount(7,8,3));?>;

        var data = {
            header: ["YEAR", "NUMBER"],
            rows: [
              ["FE", fe_ws],
              ["SE", se_ws],
              ["TE", te_ws],
              ["BE", be_ws]
        ]};
 
        // create the chart
			 var chart = anychart.column();
			chart.data(data);
			chart.title("Technical Papers Presented");
			chart.container("container");
			chart.draw();
			      });
      
    </script>
  <script>
  //Sports
      anychart.onDocumentReady(function() {
 
        // set the data
        var fe_ws=<?php echo json_encode(getcount(1,2,4));?>;
        var se_ws=<?php echo json_encode(getcount(3,4,4));?>;
        var te_ws=<?php echo json_encode(getcount(5,6,4));?>;
        var be_ws=<?php echo json_encode(getcount(7,8,4));?>;

        var data = {
            header: ["YEAR", "NUMBER"],
            rows: [
              ["FE", fe_ws],
              ["SE", se_ws],
              ["TE", te_ws],
              ["BE", be_ws]
        ]};
 
        // create the chart
			 var chart = anychart.column();
			chart.data(data);
			chart.title("Sports Played ");
			chart.container("container");
			chart.draw();
			      });
      
    </script>
  <script>
  //competition
      anychart.onDocumentReady(function() {
 
        // set the data
        var fe_ws=<?php echo json_encode(getcount(1,2,5));?>;
        var se_ws=<?php echo json_encode(getcount(3,4,5));?>;
        var te_ws=<?php echo json_encode(getcount(5,6,5));?>;
        var be_ws=<?php echo json_encode(getcount(7,8,5));?>;

        var data = {
            header: ["YEAR", "NUMBER"],
            rows: [
              ["FE", fe_ws],
              ["SE", se_ws],
              ["TE", te_ws],
              ["BE", be_ws]
        ]};
 
        // create the chart
			 var chart = anychart.column();
			chart.data(data);
			chart.title("Competition Participation ");
			chart.container("container");
			chart.draw();
			      });
      
    </script>
  <script>

  //Other activities
      anychart.onDocumentReady(function() {
 
        // set the data
        var fe_ws=<?php echo json_encode(getcount(1,2,6));?>;
        var se_ws=<?php echo json_encode(getcount(3,4,6));?>;
        var te_ws=<?php echo json_encode(getcount(5,6,6));?>;
        var be_ws=<?php echo json_encode(getcount(7,8,6));?>;

        var data = {
            header: ["YEAR", "NUMBER"],
            rows: [
              ["FE", fe_ws],
              ["SE", se_ws],
              ["TE", te_ws],
              ["BE", be_ws]
        ]};
 
        // create the chart
			 var chart = anychart.column();
			chart.data(data);
			chart.title("Other Activities ");
			chart.container("container");
			chart.draw();
			      });
      
    </script>


	
  </div>

 

</center>
</div>
</h2>
</div>
</>

</body>
</html>
