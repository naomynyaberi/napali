<?php
session_start();
$connection=
mysqli_connect('localhost','root','','napali','3306');

// require_once 'db_connect.php';
if(isset($_POST["submit"])){
    $username= $_POST["email"];
    $password=$_POST["password"];


    $sql="SELECT * FROM `user` WHERE username='$username' && password='$password'";
    $result=mysqli_query($connection,$sql);

    $count=mysqli_num_rows($result);
    

    if($count>0){

        $_SESSION["user"]=$username;
        ?>
         <script type="text/javascript">
    window.location="napali.php";
</script>
<?php
    }else{
        ?>
         <div class="alert alert-danger">
            Invalid Username or Passoword!
        </div>
        <?php
    }    

}
 ?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Favicons -->
    <!-- <link href="assets/img/logo.jpeg" rel="icon"> -->

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


    <style>

        body {
            margin: 0;
            padding: 0;
            background-image: url("waterfalls  11.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; 
            background-color: #17a2b8;
            height: 100vh; 
            


        }
        #login .container #login-row #login-column #login-box {
            margin-top: 120px;
            max-width: 600px;
            height: 320px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }
        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }
        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
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
        <li><a href="napali_photo.php">Photo Gallery</a></li>
        <li><a href="napali_booking.php">Online Booking</a></li>
 

      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li><a href="#"><span class="glyphicon glyphicon-search "></span>Search</a></li>
      </ul>
    </div>
  </div>
</nav>




<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="login_handler.php" method="POST">
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Username:</label><br>
                            <input type="email" name="email" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Remember me</span><span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            <button class="btn btn-danger" >
                                <a href="./napali.php"><span class="text-white">Home</span></a>
                            </button>
                        </div>
    <div class="col-sm-6"> 
       

	

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

