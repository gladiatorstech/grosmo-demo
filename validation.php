<?php


$usrname  = $_POST['usrname'];
$pswd1 = $_POST['pswd1'];





if (!empty($usrname) || !empty($email) || !empty($pswd1) || !empty($pswd2) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "website";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From register Where email = ? && pswd1 = ? Limit 1";
  $INSERT = "INSERT Into register (usrname , email ,pswd1, pswd2 )values(?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("ss", $email,$pswd1);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     

     $con=mysqli_connect('localhost','root','');
     mysqli_select_db($con, 'website');
     $s = "select * from register where usrname='$usrname' && pswd1='$pswd1'";
     $result =mysqli_query($con, $s);
     $rnum=mysqli_num_rows($result); 

     //checking username
      if ($rnum==1) {
        header('location:cam.php');
     
     } else {
        header('location:index.php');
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>