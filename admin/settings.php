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
    <title>Admin Panel- settings</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>
 
 <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10">
        <h3 class="mb-4">settings</h3>
         <!--Genral settings-->
         <div class="card" >
           <div class="card-body">
             <div class="d-flex align-items-center justify-content-between mb-3">
               <h5>Genral settings</h5>
               <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#genral-s">
                 edit
               </button>
             </div>
            
             <h6 class="card-subtitle mb-1 fw-bold ">Site title</h6>
             <p class="card-text">Content</p>
             <h6 class="card-subtitle mb-1 fw-bold ">About us</h6>
             <p class="card-text">content</p>
            </div>
          </div>
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                   ...
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-primary">Understood</button>
                  </div>
               </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</body>
</html>