<?php
session_start(); 

require_once "CommonImpFiles/SecureHeaders.php"; 
   
//Has definitions of all the constants used like USERNAME_LENGTH and the ones required in connectionAdmin.php for connection query string
require_once "CommonImpFiles/AllConstants.php";

//Connects to MYSQL DB using username password defined there
require_once 'CommonImpFiles/connectionAdmin.php';

$errorflag=FALSE;   
if(isset($_SESSION["Alogin"])){ 
    header("location:Admin.php"); 
}
elseif (isset($_SESSION["uname"])){ 
    header("location:User.php");
}
else{
    if($_SERVER['REQUEST_METHOD']=="POST"){
        //uname session is used for any user who is logged in. It stores the username of the logged user

        //Alogin session is used to determine whether it is Admin who is logged in or not. It is set means Admin is logged in.
        if(!isset($_SESSION['uname']) && !isset($_SESSION["Alogin"]) && isset($_POST["svv"]) && isset($_POST["p"]) )
		{
			//parseTextSafe() function defined in CommonFunctions.php is used in this page
            require_once "CommonImpFiles/CommonFunctions.php";

            $svv = parseTextSafe($conn,$_POST["svv"],USERNAME_LENGTH);

			$p = md5(parseTextSafe($conn,$_POST["p"],-1));

            //$p = parseTextSafe($conn,$_POST["p"],-1);
            //Here -1 is used as limit for parseTextSafe because there is no limit defined on password

            //This code will delete entries from newpassword table when user logs in with his new password.
            $sql = "select ID from Borrowers where username = '".$svv."'";
            $res = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($res);
            if($count==1){
                $row = mysqli_fetch_array($res);
                $id = $row['ID'];
                $sql = "select * from newPassword where username = '$id'";
                $res = mysqli_query($conn,$sql);
                $count = mysqli_num_rows($res);
                if($count==1)
                {
                    $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
                    $today = date("Y-m-d");
                    $expiry = date("Y-m-d",strtotime("+1 day",strtotime($row['time'])));
                    if($today >= $expiry)
                    {
                        $sql = "delete from newPassword where username = '$id'";
                        mysqli_query($conn,$sql);
                    }
                }
            }
            
            //This code is used to log in.
			$sql="select * from Borrowers where username='$svv' and password='$p'";

			$result=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($result);

			if($count==1)
			{
				$r = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $_SESSION["font"]=$r['font'];
                
                //For Admin
				if($r['Type'] == "A") 
                {
                    $_SESSION["uname"] = $svv; 
                    $_SESSION["Alogin"] = $svv;
                    
                    //First time use
                    if($r['usedtimes']==0)
                    {
				        header("location:Surprise.php");  
                    }
                    //Any other time
                    else
                    {
                        $sql="UPDATE Borrowers SET usedtimes=usedtimes+1 WHERE username='".$_SESSION["uname"]."'";
                        $result=mysqli_query($conn,$sql);
                        header("location:Admin.php");
                    }
                    
                }

                //If someone tries to be smart and uses Central Library's username and password
                else if($r['Type'] == "C") header("location:login.php");

                //For a normal user. Can be student or faculty or Staff
				else {
                    $_SESSION["uname"] = $svv;
                    //First time use.
                    if($r['usedtimes']==0)
                    {
                        header("location:Surprise.php"); 
                    }
                    //Any other time use
                    else{
                        $sql="UPDATE Borrowers SET usedtimes=usedtimes+1 WHERE username='".$_SESSION["uname"]."'";
                        $result=mysqli_query($conn,$sql);
                        header("location:User.php");    
                    }
                }
			}

            //Incorrect uname or pswrd
			else
			{
                $errorflag=TRUE;			    
			}
            mysqli_close($conn);
		} 
		else{ 
            header("location:index.php");
        }
    }
}    
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
        require_once "CommonImpFiles/commonHeaders.php";
    ?>
    <title>Account Login-Comps Departmental Library</title>
    <style>
        input[type=text],input[type=password]{
                height: 20px;
                border-radius: 10px;
                padding-left: 6px;
                border: none;
        }
        @media only screen and (max-width: 480px) and (min-width: 360px){
            body{
                background-size: cover!important;
            }
        }
        #frgtPwd:hover{
            color: wheat!important;
        }
    </style>
</head>
<body>
    
    
    <div id='maindiv'>
    <?php 
        require_once 'CommonImpFiles/Menu.php';
    ?>
    <script>
            $("#MenuMyAccLI").addClass("active");
            $("#MenuMyAcc").addClass("active");
            $("#MenuMyAcc").removeAttr("href");

            $("#SlideMenuLogin").addClass("active");
    </script>
    
    
    <div class="cont" style="height: auto;width: 95%;color: wheat;margin: auto;text-align: center;">
        <h4 align="center" style="line-height: initial;margin-left:0px;padding-top: 10px;color: rgb(228, 221, 204)">LOGIN HERE</h4>
        <?php
            if($errorflag){
                echo '<script type="text/javascript">alert("Username and Password doesnt match!");</script>';
                echo '<span style="margin:auto;">Incorrect Username or Password!</span>';
            }
        ?>        
        <div style="margin: auto; width: 90%;">
            <form action="" method="post" onsubmit="validate()">
                <fieldset style="text-align:center;">
                    <table class="input_structure" border="0">
                        <tr>
                            <td class="labels"><label for="svv">Username <span class="RequiredInputFieldSpan">*</span> : &nbsp </label></td>
                            <td class="inputs"><input type="text" id="svv" name="svv" maxlength="<?php echo USERNAME_LENGTH; ?>" placeholder="ID" required autofocus="true"/></td>
                        </tr>
                        <tr>
                            <td class="labels"><label for="p">Password <span class="RequiredInputFieldSpan">*</span> :  &nbsp</label></td>
                            <td class="inputs"><input type="password" id="p" name="p" placeholder="password" height="40px" required/></td>
                        </tr>
                        <tr class="submit_row">
                            <td colspan="2"><input id="login" type="submit" value="Login"/></td>
                        </tr>
                    </table>
                    <a id="frgtPwd" style="color:white;margin-top: 5px;text-decoration: none;cursor:pointer;" href="forgotPassword.php">Forgot Password?</a>
                </fieldset>
            </form>
        </div>
        <br><br>    
    </div>
    <script>
        function validate() {
            var uname_elem = document.getElementById('svv');

            if(uname_elem.value.endsWith("@somaiya.edu")){
                uname_elem.value=uname_elem.value.substring(0,uname_elem.value.indexOf("@somaiya.edu"));
            }

            var pwd_elem = document.getElementById('p');
            pwd_elem.value = md5(pwd_elem.value);
        }
    </script>
    <?php require_once "CommonImpFiles/YesWeAreSmart.php"; ?>
</div>
    
</body>
</html>