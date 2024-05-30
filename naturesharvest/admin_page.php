<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <center><img src="logo.jpg" alt="Logo" width="200rem" height="200rem" top:30% style="border-radius: 50%;"></center>
   <div class="content1">
   <h1> <center> Nature's Harvest </center> </h1>   </div><br>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="dashboard">

   <h1 class="title">Dashboard</h1>

   <div class="box-container">

      <div class="box">
      <?php
         $total_pendings = 0;
         $select_pendings = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
         $select_pendings->execute(['pending']);
         while($fetch_pendings = $select_pendings->fetch(PDO::FETCH_ASSOC)){
            $total_pendings += $fetch_pendings['total_price'];
         };
      ?>
      <h3>₹<?= $total_pendings; ?>/-</h3>
      <p>Pending Order Amount</p>
      </div>

      <div class="box">
      <?php
         $total_completed = 0;
         $select_completed = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
         $select_completed->execute(['completed']);
         while($fetch_completed = $select_completed->fetch(PDO::FETCH_ASSOC)){
            $total_completed += $fetch_completed['total_price'];
         };
      ?>
      <h3>₹<?= $total_completed; ?>/-</h3>
      <p>Sales Amount</p>
      </div>

      <div class="box">
      <?php
         $select_orders = $conn->prepare("SELECT * FROM `orders`");
         $select_orders->execute();
         $number_of_orders = $select_orders->rowCount();
      ?>
      <h3><?= $number_of_orders; ?></h3>
      <p>Orders Placed</p>
      </div>

      <div class="box">
      <?php
         $select_products = $conn->prepare("SELECT * FROM `products`");
         $select_products->execute();
         $number_of_products = $select_products->rowCount();
      ?>
      <h3><?= $number_of_products; ?></h3>
      <p>Products Added</p>
      </div>

      <div class="box">
      <?php
         $select_users = $conn->prepare("SELECT * FROM `users` WHERE user_type = ?");
         $select_users->execute(['user']);
         $number_of_users = $select_users->rowCount();
      ?>
      <h3><?= $number_of_users; ?></h3>
      <p>Total Users</p>
      </div>

      <div class="box">
      <?php
         $select_admins = $conn->prepare("SELECT * FROM `users` WHERE user_type = ?");
         $select_admins->execute(['admin']);
         $number_of_admins = $select_admins->rowCount();
      ?>
      <h3><?= $number_of_admins; ?></h3>
      <p>Total Admins</p>
      </div>

      

      

   </div>

</section>













<script src="script.js"></script>

</body>
</html>