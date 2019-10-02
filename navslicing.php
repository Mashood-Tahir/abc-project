<?php include "connections.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>Mashood Tahir</title>
  <style>
    body{
      background-color: #EDF2F9;
      margin: 0px;
    }
    .bodyclr{
      background-color: #EDF2F9;
      border: none;
    }
    *{
  box-sizing: border-box;
}
  </style>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #384B59;">
  <a class="navbar-brand font-weight-bold" href="travel.php" style="color: #7DB2D8">
    <img src="IMG-20190527-WA0035.jpg" style="height: 40px;"> <span style="color: white;">  Travelonline</a></span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="travel.php" style="color: #7DB2D8">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feature.php" style="color: #7DB2D8">Feature</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php" style="color: #7DB2D8">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tours.php" style="color: #7DB2D8">Tours</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tickets.php" style="color: #7DB2D8">Ticket's</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hotel.php" style="color: #7DB2D8">Hotel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php" style="color: #7DB2D8">Contacts</a>
      </li>
<?php 
if (isset($_SESSION['id'])) {
  # code...

     echo  '<li class="nav-item">
        <a class="nav-link" href="datainput.php" style="color: #7DB2D8">Tour Book</a>
      </li>';

}
 ?>

    </ul>
    <form class="form-inline my-2 my-lg-0">
        
    <form>
  <div class="form-row align-items-center">
    <div class="">
      <label class="sr-only" for="inlineFormInputGroupUsername">Search</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-search" ></i></div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Search">
      </div>
    </div>
  </div>
</form>
<!-- <a href="logouts.php" class="pl-3 text-white">LOG-OUT</a> -->
<?php
if (isset($_SESSION['id']))
{
    
        echo '<a href="logouts.php" class="pl-3 text-white">LOG-OUT</a>';
      }
      else{

        echo '<a href="account.php" class="text-white m-3"><i class="fas fa-user-plus"></i></a>
      <a href="connect.php" class="text-white m-3"><i class="fas fa-user"></i></a>';
       }


 ?>
      
    </form>
  </div>
</nav>