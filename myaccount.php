<?php
error_reporting(E_ERROR|E_PARSE);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRAJWAL PATIL</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/shapes.css">
    <link rel="stylesheet" href="./css/cardsnav.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
  <style>
  
   .nav-item a:hover {
            background-color: rgba(255, 208, 0, 0.952);
            color: white !important;
            cursor: pointer;
        }
        .activex{
          background-color:  rgba(255, 208, 0, 0.952);
        }
        .card:hover{
          background-color: whitesmoke;
          border-color: yellow;
        }
        
       
   
        
     </style>
  </head>
<body>
<nav  class="navbar navbar-expand-md navbar-light " style="background-color:orange;">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i style="color:black;border-right: 1px solid #bbb;" class="fa fa-user">Logout</i> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myaccount.php"><i style="color:black;border-right: 1px solid #bbb;" class="fa fa-user">My Account</i></a>
        </li>
        <li class="nav-item">
          <a style="border-right: 1px solid #bbb;" class="nav-link" href="#"><i style="color:black;"class="fa fa-heart">My Favourits</i></a>
        </li>
      </ul>
      <ul  class="navbar-nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="#"><i style="color:black;border-right: 1px solid #bbb;" class="fa fa-facebook-official"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i style="color:black;border-right: 1px solid #bbb;" class="fa fa-linkedin-square"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i style="color:black;border-right: 1px solid #bbb;" class="fa fa-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i style="color:black;border-right: 1px solid #bbb;" class="fa fa-pinterest"></i></a>
        </li>                   
        <li class="nav-item">
          <a class="nav-link" href="#"><i style="color:black;border-right: 1px solid #bbb;" class="fa fa-google-plus"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i style="color:black;border-right: 1px solid #bbb;" class="fa fa-foursquare"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i style="color:black;border-right: 1px solid #bbb;" class="fa fa-instagram"></i></a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="#"><i style="color:black;border-right: 1px solid #bbb;" class="fa fa-youtube-square"></i></a>
        </li>    
      </ul>
  </div>
  
</nav>
<!-- secon -->
<br>
<div class="container">
  <img src="./imgs/logo.png">         
</div>
<br><br>
<header>
<nav  class="navbar navbar-expand-md navbar-dark" style="background-color:navy;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars2" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button><br><br> 
  <div class="collapse navbar-collapse" id="navbars2">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Freebie</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="#">Mobile Recharge Offer</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="#">Electronic Offer</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="#">Restaurent Offer</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="#">Travel Offer</a>
        </li>
        <li class="nav-item ">
          <a  class="nav-link " href="#">Groceries Offer</a>
        </li>
       
      </ul>
  </div>
  <a class="navbar-brand arrow_box" href="./studentdisccount.html">Student Discount</a>
</nav>
</header>
<!-- header jumbotron -->
<div class="jumbotron jumbotron-fluid" 
style=" margin: 0px;background:linear-gradient( rgba(70, 104, 197, 0.247),rgba(125, 250, 250, 0.45)),url(./imgs/finallogo1.jpg);
background-repeat: repeat;background-attachment: fixed;color:white !important;">
<div class = "container">
  <div class="row">
    <div class="col-md-6"><h3>My Account-Free Shopping</h3></div>  
    <div class="col-md-6" style="font-size: 30px;"><center><a href="index.html"><i class="fa fa-home" style="font-size: 35px;color:rgb(238, 255, 0);"></i></a>/My Account</center></div>
  </div>
</div>  
</div>  
        
<!--heading Registration  -->
<div class="jumbotron">
        <!-- <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                       <h1>Login</h1>
                   </div>
                   <div class="col-lg-6">
                       <button class="btn btn-outline-primary">Logout</button>
                   </div>
                </div>
          </div> -->
Hello <?php echo $_SESSION['user'];?> (not <?php echo $_SESSION['user'];?>?Sign out). From your account dashboard you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.
<h1>My Address</h1>
The following addresses will be used on the checkout page by default.
<hr>
<h1>Billing Address</h1>
<button class="btn xm">Edit</button><br>
You have not set up this type of address yet.
</div>

<!-- supports -->
<br>
<div class="jumbotron" style="background-color: rgb(6, 6, 82);color: seashell">
  <div class="container">
    <div class="row">
      <div class="col-sm">
       
        <ul style="list-style: none;">
          <h3>Get Us to Know</h3>
          <li>About Us</li>
          <li>Our Team</li>  
           <li>FAQ’S</li>
           <li>Testimonials</li>
          <li>Career With Us</li>
          <li>Media Contact</li>
          <li>Investors</li>
          <li>Contact Us</li>
        </ul>
      </div>
      <div class="col-sm">
       
       <ul style="list-style: none;">
        <h3>Support</h3>
       <li> Advertise With Us</li>
       <li> Campus Ambassador</li>
       <li> Feedback</li>
       <li>  Win A Gift Cards</li>
        <li>Terms & Conditions</li>
      <li>  Privacy Policy</li>
      </ul>
      </div>
      <div class="col-sm">
        <h3>Never Miss out Exclusive Deals!</h3>
        <input type="email" class="form-control" readonly placeholder="Your email Address"><br>
        <input type="submit" class="btn btn-outline-primary">
      </div>
    </div>
  </div>
</div>
<!-- connect with us -->
<div class="jumbotron" style="background-color: black;color:lavenderblush;">
<center>Freeshopping.com Made With Love From INDIA.<br>
All Rights Reserved. All Content, Trademarks And Logos Are Copyright Of Their Respective Owners.
<br><br>
<a href="#"><i class="fa fa-facebook-official" style="padding-right:5px;font-size:50px;color:#3b5999;text-shadow:2px 2px 4px #000000;"></i></a>
<a href="#"><i style="padding-right:5px;font-size:50px;color:#55acee;text-shadow:2px 2px 4px #000000;" class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin-square" style="padding-right:5px;color:#0077B5;font-size:50px;text-shadow:2px 2px 4px #000000;"></i></a>
<a href="#"><i class="fa fa-google-plus"style="padding-right:5px;font-size:50px;color:#dd4b39;text-shadow:2px 2px 4px #000000;"></i></a>
<a href="#"><i class="fa fa-pinterest"style="padding-right:5px;font-size:50px;color:#bd081c;text-shadow:2px 2px 4px #000000;"></i></a>
<a href="#"><i style="padding-right:5px;font-size:50px;color:#e4405f;text-shadow:2px 2px 4px #000000;" class="fa fa-instagram"></i></a>
<a href="#"><i style="padding-right:5px;font-size:50px;color:#f94877;text-shadow:2px 2px 4px #000000;" class="fa fa-foursquare"></i></a>
<a href="#"><i style="padding-right:5px;font-size:50px;color:#cd201f;text-shadow:2px 2px 4px #000000;" class="fa fa-youtube-square"></i></a>
</center>
</div>


</body>
</html>
