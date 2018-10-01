<?php
session_start();
require("functions.php");


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



    if (isset($_GET['deloa'])) {
  $filename=$_GET['deloa'];
  $sql="delete from other where filename='$filename'";
  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}



  if (isset($_GET['delcomp'])) {
  $filename=$_GET['delcomp'];
  $sql="delete from competition where filename='$filename'";
  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}



 if (isset($_GET['delsports'])) {
  $filename=$_GET['delsports'];
  $sql="delete from sports where filename='$filename'";
  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

}

 if (isset($_GET['deltpp'])) {
  $filename=$_GET['deltpp'];
  $sql="delete from tpp where filename='$filename'";
  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

}



 if (isset($_GET['delcourse'])) {
  $filename=$_GET['delcourse'];
  $sql="delete from course where filename='$filename'";
  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


}


 if (isset($_GET['delws'])) {
  $filename=$_GET['delws'];
  $sql="delete from workshop where filename='$filename'";
  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}



?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="design_forms.css"> 
   <link rel="stylesheet" type="text/css" href="displayData.css"> 
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
    <button class="dropbtn">Hi, 
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
	 <a  class ="report" href="#">Report <i class="fa fa-caret-down"></i></a>
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
 
   

$rn=$usersData['rollno']; 
}
?>

<div class="bd">
<h2> </h2>


<div class="viewprogress">
	<h3 >Workshops/Seminars attended :</h3>

	



<?php
  $sql = "select * from workshop where rollno=$rn";
  $result=mysqli_query($conn,$sql);
  if ($result->num_rows > 0)
  {

    ?>

    <table style="margin-top:40px; margin-left: 20px" border="3" solid white>

        <tr><th>  <span style='color:#CFEEFB;'> Roll No.</th><th>Name</th><th>Conducted by</th><th>Start date</th><th>End date</th><th>Certificate</th><th>Delete</th> </span></tr>

<?php
  while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

  

      
  echo "<tr><td > <span style='color:#CFEEFB;'>  ". $line['rollno']."
      </td><td>  <span style='color:#CFEEFB;'> ". $line['namew']."
      </td><td>  <span style='color:#CFEEFB;'> ". $line['con_by']."
      </td><td>  <span style='color:#CFEEFB;'> ". $line['start_date']."
      </td><td>  <span style='color:#CFEEFB;'> ". $line['end_date']." 
      </td><td> ";
  

      $fn =$line['filename'];
      $files= scandir("uploads/workshop");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

       

        <p>
          <a style='color:#CFEEFB;' href="uploads/workshop/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }


      }
echo "</td><td><a href='viewprogress.php?delws=$fn' onClick=\"return confirm('Are you sure you want to delete this ?');\" class='button'><button type='submit' name='delete' class='btn'><i class='fa fa-trash'></i></button></a></td></tr>";




  }
  }
  else
  {
    echo "<center><font size='5'> NO ENTRIES FOUND </font></center>";
  }
 
?>

</table>

<h3 >Courses completed :</h3>

<?php
  $sql = "select * from course where rollno=$rn";
  $result=mysqli_query($conn,$sql);
  if ($result->num_rows > 0)
  {

    ?>

    <table style="margin-top:40px; margin-left: 20px" border="3" solid white>

      <tr><th>  <span style='color:#AFA;'> Roll No.</th><th>Name</th><th>Institute/Website</th><th>Start date</th><th>End date</th><th>Certificate</th> <th>Delete</th></span></tr>

<?php
  while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

  

      
  echo "<tr><td > <span style='color:#AFA;'>  ". $line['rollno']."
    </td><td>  <span style='color:#AFA;'> ". $line['name_c']."
    </td><td>  <span style='color:#AFA;'> ". $line['insti']."
    </td><td>  <span style='color:#AFA;'> ". $line['start_date']." 
    </td><td>  <span style='color:#AFA;'> ". $line['end_date']." 
    </td><td>  ";


      $fn =$line['filename'];
      $files= scandir("uploads/courses");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

       

        <p>
          <a style='color:#AFA;' href="uploads/courses/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }


      }
echo "</td><td><a href='viewprogress.php?delcourse=$fn' onClick=\"return confirm('Are you sure you want to delete this ?');\" class='button'><button type='submit' name='delete' class='btn'><i class='fa fa-trash'></i></button></a></td></tr>";



    


   }   
  }
  else
  {
    echo "<center><font size='5'> NO ENTRIES FOUND </font></center>";
  }
  

?>

</table>

<h3 >TPP :</h3>

<?php
  $sql = "select * from tpp where rollno=$rn";
  $result=mysqli_query($conn,$sql);
  if ($result->num_rows > 0)
  {

    ?>

    <table style="margin-top:40px; margin-left: 20px" border="3" solid white>

     <tr><th>  <span style='color:#AFA;'> Roll No.</th><th>Title</th><th>Author</th><th>Presented At</th><th>Paper</th><th>Delete</th></span></tr>

<?php
  while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
     
  echo "<tr><td > <span style='color:#AFA;'>  ". $line['rollno']."
    </td><td>  <span style='color:#AFA;'> ". $line['title']."
    </td><td>  <span style='color:#AFA;'> ". $line['author']."
    </td><td>  <span style='color:#AFA;'> ". $line['presented_at']." 
    </td><td>  ";


      $fn =$line['filename'];
      $files= scandir("uploads/tpp");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

       

        <p>
          <a style='color:#AFA;' href="uploads/tpp/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }


      }
echo "</td><td><a href='viewprogress.php?deltpp=$fn' onClick=\"return confirm('Are you sure you want to delete this ?');\" class='button'><button type='submit' name='delete' class='btn'><i class='fa fa-trash'></i></button></a></td></tr>";


    


   }   
  }
  else
  {
    echo "<center><font size='5'> NO ENTRIES FOUND </font></center>";
  }


?>



</table>

<h3 >Sports :</h3>

<?php
  $sql = "select * from sports where rollno=$rn";
  $result=mysqli_query($conn,$sql);
  if ($result->num_rows > 0)
  {

    ?>

    <table style="margin-top:40px; margin-left: 20px" border="3" solid white>

     <tr><th>  <span style='color:#AFA;'> Roll No.</th><th>Name of Tournament</th><th>Place</th><th>Rank</th><th>Start date</th><th>End date</th><th>Certificate</th><th>Delete</th> </span></tr>
<?php
  while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

  

      
  echo "<tr><td > <span style='color:#AFA;'>  ". $line['rollno']."
    </td><td>  <span style='color:#AFA;'> ". $line['tour_name']."
    </td><td>  <span style='color:#AFA;'> ". $line['place']."
    </td><td>  <span style='color:#AFA;'> ". $line['position']."
    </td><td>  <span style='color:#AFA;'> ". $line['start_date']." 
    </td><td>  <span style='color:#AFA;'> ". $line['end_date']." 
    </td><td>  ";


      $fn =$line['filename'];
      $files= scandir("uploads/sports");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

       

        <p>
          <a style='color:#AFA;' href="uploads/sports/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }


      }
echo "</td><td><a href='viewprogress.php?delsports=$fn' onClick=\"return confirm('Are you sure you want to delete this ?');\" class='button'><button type='submit' name='delete' class='btn'><i class='fa fa-trash'></i></button></a></td></tr>";




    


   }   
  }
  else
  {
    echo "<center><font size='5'> NO ENTRIES FOUND </font></center>";
  }


?>



</table>

<h3 >Competitions :</h3>

<?php
  $sql = "select * from competition where rollno=$rn";
  $result=mysqli_query($conn,$sql);
  if ($result->num_rows > 0)
  {

    ?>

    <table style="margin-top:40px; margin-left: 20px" border="3" solid white>

     <tr><th>  <span style='color:#AFA;'> Roll No.</th><th>Name of Competition</th><th>Conducted by</th><th>Rank</th><th>Start date</th><th>End date</th><th>Certificate</th><th>Delete</th></span></tr>
<?php
  while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

  

      
  echo "<tr><td > <span style='color:#AFA;'>  ". $line['rollno']."
    </td><td>  <span style='color:#AFA;'> ". $line['name_comp']."
    </td><td>  <span style='color:#AFA;'> ". $line['cond_by']."
    </td><td>  <span style='color:#AFA;'> ". $line['position']."
    </td><td>  <span style='color:#AFA;'> ". $line['start_date']." 
    </td><td>  <span style='color:#AFA;'> ". $line['end_date']." 
	
    </td><td>   ";


      $fn =$line['filename'];
      $files= scandir("uploads/competition");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

       

        <p>
          <a style='color:#AFA;' href="uploads/competition/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }


      }
echo "</td><td><a href='viewprogress.php?delcomp=$fn' onClick=\"return confirm('Are you sure you want to delete this ?');\" class='button'><button type='submit' name='delete' class='btn'><i class='fa fa-trash'></i></button></a></td></tr>";



    


   }   
  }
  else
  {
    echo "<center><font size='5'> NO ENTRIES FOUND </font></center>";
  }


?>



</table>

<h3 >Other Activities :</h3>

<?php
  $sql = "select * from other where rollno=$rn";
  $result=mysqli_query($conn,$sql);
  if ($result->num_rows > 0)
  {

    ?>

    <table style="margin-top:40px; margin-left: 20px" border="3" solid white>

      <tr><th>  <span style='color:#AFA;'> Roll No.</th><th>Name of Activity</th><th>Conducted by</th><th>Start date</th><th>End date</th><th>Certificate</th><th>Delete</th> </span></tr>

<?php
  while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

  

      
  echo "<tr><td > <span style='color:#AFA;'>  ". $line['rollno']."
    </td><td>  <span style='color:#AFA;'> ". $line['name_act']."
    </td><td>  <span style='color:#AFA;'> ". $line['cond_by']."
    </td><td>  <span style='color:#AFA;'> ". $line['start_date']." 
    </td><td>  <span style='color:#AFA;'> ". $line['end_date']." 
    </td><td>  ";


      $fn =$line['filename'];
      $files= scandir("uploads/other_activity");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

       

        <p>
          <a style='color:#AFA;' href="uploads/other_activity/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }


      }
echo "</td><td><a href='viewprogress.php?deloa=$fn'  onClick=\"return confirm('Are you sure you want to delete this ?');\" class='button'><button type='submit' name='delete' class='btn'><i class='fa fa-trash'></i></button></a></td></tr>";

/*<a href='?del_id=<?php echo $id; ?>' onclick='return confirm("Are you sure want to delete this ?");'>Delete this</a>
*/    


   }   
  }
  else
  {
    echo "<center><font size='5'> NO ENTRIES FOUND </font></center>";
  }

$conn->close();
?>



</table>






	</div>
	<br><br>




</div>

</body>

</html>