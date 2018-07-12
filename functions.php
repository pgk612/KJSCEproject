<?php



 $conn = mysqli_connect('localhost','root','','kjsce');




function getUsersData($idno){
    global $conn;
    $array = array();
	$q = mysqli_query($conn,"select * from student where idno='".$idno."'");

    
	while($r=mysqli_fetch_assoc($q))
	{
		$array['idno']= $r['idno'];
		$array['rollno']= $r['rollno'];
		$array['name']= $r['name'];
		$array['sem']= $r['sem'];
		$array['div']= $r['div'];


	}
	return $array;

}

function getID($username)
{   global $conn;
	$q = mysqli_query($conn,"select idno from student where username='".$username."'");
	while($r =mysqli_fetch_assoc($q))
	{
		return $r['idno'];
	}
}

?>
