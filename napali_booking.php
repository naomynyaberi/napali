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
         echo '<script>alert("Succesfully booked")</script>';
     }else{
         echo "booking failed,try again!!!";
     }
 
 
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery-3.2.0.js"></script>
	<script src="js/bootstrap.js"></script>
</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">NAPALI</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="napali.php">Home</a></li>
					<li><a href="login.php">Client Login</a></li>
					<li><a href="napali_services.php">Services/Facilities</a></li>
					<li><a href="napali_photo.php">Photo Gallery</a></li>


				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-search "></span>Search</a></li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="row text-center" id="form">
		<h1 class="jumbotron text-center text-uppercase">Booking Online</h1>


			<form action="" method="post">

				<div class="container">
					<div class="row">
						<h3 class="text-center mx-4 ">For bookings, fill the form below;</h3>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputCity">	Name/School/Organization
								</label>
								<input type="text"  class="form-control" name="name" placeholder="e.g naomi kwamboka, JKUAT">

							</div>
							<div class="form-group col-md-4">
								<label for="inputCity">Your ID number
								</label>
								<input type="number" class="form-control" maxlength="8" name="id_number" placeholder="e.g 12324348">

							</div>
							<div class="form-group col-md-4">
								<label for="inputCity">Purpose of visit</label>
								<input type="text" class="form-control"  name="purpose" placeholder="e.g retreat,events,camping">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputCity">Date you wish to visit </label>
								<input type="date" name="date" class="form-control" placeholder="e.g 4/9/2017">
			
							</div>
							<div class="form-group col-md-4">
								<label for="inputCity">Number of individuals
								</label>
								<input type="number" class="form-control"name="number" placeholder="e.g 5,20,100">
			

							</div>
						
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputCity"> phone number
								</label>
								<input type="tel"  class="form-control" name="number" placeholder="eg 0713753722">

							</div>
							<div class="form-group col-md-4">
								<label for="inputCity">Duration of visit
								</label>
								<input type="number" class="form-control" name="duration" placeholder="e.g 3 days">


							</div>
							<div class="form-group col-md-4">
								<label for="inputCity">Enter your Email</label>
								<input type="email" class="form-control" name="email"placeholder="e.g naomikwamboka@gmail.com">
		
							</div>

						</div >
						<p>

							<!-- After you fill and submit the form above, you'll receive an email to confirm your booking. -->
						<p>
					</div>

					<input type="submit" value="submit" name="submit" class="btn btn-success mt-2">
					<button class="btn btn-default"><a href="">reset</a> </button><br>
					For more info use the contacts on our home page.

				</div>
			</form>
	</div>

	<div class="row text-center" id="copy2">
		&copy; 2022 copyright
	</div>
	</font>




</body>

</html>