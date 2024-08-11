<?php 
   require('inc/essentials.php');
   require('inc/db_config.php');
   session_start();
   if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
    redirect('dashboard.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login panel</title>
    <?php require('inc\links.php'); ?>
    <style>
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400%px;
        }
      .custom-bg{
         background-color: #2ec1ac;
      }
     .custom-bg:hover{
       background-color: #279e8c;
     }
    </style>
</head>
<body class="bg-light">

  <div class="login-form text-center rounded bg-white shadow overflow-hidden">
    <form method= "POST">
     <h4 class="bg-dark text-white py-3"> Admin login panel</h4>
      <div class="p-4">
       <div class="mb-3">
         <input name="admin_name" required type="text" class="form-control shadow-none text-center"placeholder="admin name">
       </div>
       <div class="mb-4">
         <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="password">
       </div class="col-lg-1 mb-lg-3 mt-2">
       <button name="login" type="submit" class="btn text-white custom-bg shaow-none">login</button>
     </div>
    </form>
  </div>

  <?php
    
   if(isset($_POST['login']))
    {
      $frm_data = filteration($_POST);
      $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
      $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

      $res = select($query, $values,"ss");
      if($res->num_rows==1){
        $row = mysqli_fetch_assoc($res);
        $_SESSION['adminLogin'] = true;
        $_SESSION['adminId'] = $row['sr_no'];
        redirect('dashboard.php');
      }
      else{
        alert('error','Login failed - Invalid Credentials!');
      }
    }
  ?>
  
 <?php 
   require('inc/script.php');
 ?>
</body>
</html>