<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <center><img src="logo.jpg" alt="Logo" width="200rem" height="200rem" top:30% style="border-radius: 50%;"></center>
   <div class="content1">
   <h1> <center> Nature's Harvest </center> </h1>   </div><br>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="why.jpg" alt="">
         <h3>why choose us?</h3>
         <p>At the heart of <b>NATURE'S HARVEST</b> is our commitment to be a living embodiment of love and consciousness in action.
             We work with thousands of small family farmers in India to cultivate tens of thousands of acres of sustainable
              organic farmland. All <b>NATURE'S HARVEST</b> products support health and True Wellness and are made with loving care. 
              Each product is one link in a chain of connectedness between Mother Nature, our farmers and you. 
              By choosing NATURE'S HARVEST you are completing this chain, actively participating in our mission to create
               a sustainable environment of True Wellness, providing training and a life of dignity to our farmers, and
                bringing health, happiness and True Wellness to you.</p>
         
      </div>

      <div class="box">
         <img src="vission.jpg" alt="">
         <h3>Vision And mission</h3>
         <p><b>Our Vision</b><br>
To be a Vehicle of Consciousness in the global market by creating an holistic, sustainable business modality, 
which inspires, promotes and supports True Wellness and respect for all Beings and for Mother Nature..
<br><b>Our Mission</b><br>
To be a trustworthy and innovative global leader in providing genuine organic True Wellness products and solutions 
for conscious, healthy living.
<br><b>Our Values</b><br>
Service to all
Total integrity
Absolute commitment to quality
Respect and devotion to Mother Nature
No compromise on being who we are.

 </p>

      </div>

   </div>

</section>



<?php include 'footer.php'; ?>

<script src="script.js"></script>

</body>
</html>