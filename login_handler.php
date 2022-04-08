<?php  session_start();  
require_once "db_connect.php";
 // session starts with the help of this function


if(isset($_SESSION['use']))   // Checking whether the session is already there or not if
    // true then header redirect it to the home page directly
{
    header("Location:login.php");
}


//start db conncetion
$connection = mysqli_connect('localhost','root','','Napali','3306');

mysqli_select_db($connection,'napali');

//get values from login file
$email      = $_POST['email'];
$password       = $_POST['password'];

    //connect to the database to save
    $insertQuery="INSERT INTO `login`(`password`,`email`) 
    VALUES ('$password','$email')";


$query = "select * from users where email = '$email' && password = '$password'";

$result = mysqli_query($connection, $query);

$num = mysqli_num_rows($result);

if($num == 1){

    $_SESSION['email'] = $email;
    echo "Login successful !!! Welcome".$_SESSION['use']=$email;

    header('location:napali.php');
}else{
//    echo "Failed to login. Try again after some time";
    // echo "Invalid UserName or Password";

    header("location:login.php");
}

