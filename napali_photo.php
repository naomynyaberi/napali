<!DOCTYPE html>
<html>
<head>
	<title>Photo Gallery</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src = "js/jquery-3.2.0.js"></script>
	<script src="js/bootstrap.js"></script>

	 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
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
        <li><a href="napali_booking.php">Online Booking</a></li> 

      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li><a href="#"><span class="glyphicon glyphicon-search "></span>Search</a></li>
      </ul>
    </div>
  </div>
</nav>
	
	<font color="#ffffff">
	<div class="row" id="photo">
	<h1 class="text-center jumbotron"><font color="black">PHOTO GALLERY</font></h1>
		
		<div class="col-md-4">
			<img src="Georgia_Aquarium_-_Ocean_Voyager_Tunnel_Jan_2006.jpg" width="400">
		</div>

		<div class="col-md-4">
			<img src="images 2.jpg" width="450">
		</div>

		<div class="col-md-4">
			<img src="zanzibar festival dance.jpg" width="420">
		</div>
	</div> <!--end of row-->

	<div class="row" id="photo2">
		
		<div class="col-md-4">
			<img src="duden-waterfall.jpg" width="400">
		</div>

		<div class="col-md-4">
			<img src="Hyde Park London Beautiful View.jpg" width="400">
		</div>

		<div class="col-md-4">
			<img src="horse-riding.jpg" width="400">
		</div>
	</div> <!--end of row-->

	<div class="row" id="photo3">
		
		<div class="col-md-4">
			<img src="sunrise-mykonos-hotel-05.jpg" width="400">
		</div>

		<div class="col-md-4">
			<img src="smart-parking-solutions.jpg" width="450">
		</div>

		<div class="col-md-4">
			<img src="mykonos-hotel-03.jpg" width="480">
		</div>
	</div> <!--end of row-->

	<div class="row" id="photo4">
		
		<div class="col-md-4">
			<img src="DSCF0043.jpg" width="400">
		</div>

		<div class="col-md-4">
			<img src="Restaurants-Dubai-Restaurant-Guide-Directory-Dubai-City.jpg" width="400">
		</div>

		<div class="col-md-4">
			<img src="The-Seed-Fund.jpg" width="450">
		</div>
	</div> <!--end of row-->

	<div class="row" id="photo5">
		
		<div class="col-md-4">
			<img src="waterfalls  11.jpg" width="400">
		</div>

		<div class="col-md-4">
			<img src="Beston-merry-go-round-for-sale.jpg" width="400">
		</div>

		<div class="col-md-4">
			<img src="swimming-pool.jpg" width="400">
		</div>
	</div> <!--end of row-->

	<div class="row" id="photo6">
		
		<div class="col-md-4">
			<img src="FB_IMG_1493962108170.jpg" width="400">
		</div>

		<div class="col-md-4">
			<img src="FB_IMG_1493962117269.jpg" width="400">
		</div>

		<div class="col-md-4">
			<img src="FB_IMG_1493962258745.jpg" width="400">
		</div>
	</div> <!--end of row-->

	<div class="row" id="photo7">
		
		<div class="col-md-4">
			<img src="FB_IMG_1493962309244.jpg" width="400">
		</div>

		<div class="col-md-4">
			<img src="mykonos-hotel-13.jpg" width="400">
		</div>

		<div class="col-md-4">
			<img src="FB_IMG_1493962367064.jpg" width="400">
		</div>
	</div> <!--end of row-->
	
	<div class="row" id="photo8">
		
		<div class="col-md-4">
			<img src="FB_IMG_1493997124518.jpg" width="350">
		</div>

		<div class="col-md-4">
			<img src="FB_IMG_1493997372240.jpg" width="350">
		</div>

		<div class="col-md-4">
			<img src="FB_IMG_1493997600450.jpg" width="350">
		</div>
	</div> <!--end of row-->

	<h1 class="text-center text-uppercase jumbotron" ><font color="black">more on your slide-show</font></h1>


	<div id="myCarousel2" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
	    <li data-target="#myCarousel" data-slide-to="4"></li>
	    <li data-target="#myCarousel" data-slide-to="5"></li>
	    <li data-target="#myCarousel" data-slide-to="6"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">

	    <div class="item active">
	      <img src="fixedw_large_4x.jpg" alt="fixedw_large_4x" width="700">
	    </div>

	    <div class="item">
	      <img src="182912414_x.jpeg" alt="182912414_x" width="700">
	    </div>

	    <div class="item">
	      <img src="boat-ride-vourvourou-dream-swim.jpg" alt="boat-ride-vourvourou-dream-swim" width="700">
	  </div>

	   <div class="item">
	      <img src="cars-bouncy-castle.jpg" alt="cars-bouncy-castle" width="700">
	    </div>

	   <div class="item">
	      <img src="1481713200_xjvUY2_1168-00-06.jpg" alt="1481713200_xjvUY2_1168-00-06" width="700">
	  </div>

	   <div class="item">
	      <img src="wedding-party.jpg" alt="wedding-party" width="1000">
	  </div>
 
	   <div class="item">
	      <img src="Nature Hidden Waterfall.jpg" alt="Nature Hidden Waterfall" width="700">
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

	

	<div class="row text-center" id="copy">
		&copy; 2022 copyright
	
	</div>
	</font>


	


</body>
</html>