<?php
  require('inc/essentials.php');
  adminLogin();
  session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel- Dashboard</title>
    <style>
      .dashboard-menu{
       position: fixed;
       height: 100%
      }
      @media screen and(max-width:992px) {
       .dashboard-menu{
        height: auto;
        width: 100%;
     }
     .main-content{
        margin-top:60px;
     }
}

    </style>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Room available</h2>
 <div class="container">
   <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
       <p>2</p>
       <h5 class="mt-3">booking</h5>
     </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
     <p>2</p>
       <h5 class="mt-3">Booked</h5>
     </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
     <p>0</p>
       <h5 class="mt-3">Cancelled</h5>
     </div>
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
     <p>2</p>
       <h5 class="mt-3">Occupied</h5>
      </div> 
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <p>2</p>
       <h5 class="mt-3">EXTRA</h5>
     </div>
    </div>
  </div>
</div>
<div class="col-12 text-center mt-5">
  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Manage</a>
</div>

 
</body>
</html>