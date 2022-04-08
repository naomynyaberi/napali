<?php
$connection=
mysqli_connect('localhost','root','','napali','3306');
//

if (isset($_POST["submit"])) {
    # code...
     //start receiving data from the form
     $name =$_POST["name"];
     $idnumber =$_POST["id_number"];
     $purpose =$_POST["purpose"];
     $date =$_POST["date"];
     $number =$_POST["number"];
     $phonenumber =$_POST["phone_number"];
     $duration =$_POST["duration"];   
     $email =$_POST["email"];
 
    //connect to the database to save
     $insertQuery="INSERT INTO `bookings`(`name`,`purpose`,`date`,`number`,`phone_number`,`duration`,`email`) 
     VALUES ('$name','$purpose','$date','$number','$phonenumber','$duration','$email')";


     if (mysqli_query($connection,$insertQuery)){
         header("location:booking_handler.php");
         echo '<script>alert("Succesfully booked")</script>';
     }else{
         echo "booking failed,try again!!!";
     }
 
 
}

