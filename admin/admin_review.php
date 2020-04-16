<?php 
  
  // Can only access by admin
  session_start();

  if(empty($_SESSION['a_id']) or empty($_SESSION['username'])) {
      header("Location: index.php"); 
  }


  require_once '../include/dbcon.php';
  require_once '../include/app_vars.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">

    <title>Admin | Review </title>

    <style>
      .button {
        font-family: Arial;
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 4px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 5px;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        height
      }

      .button1 {
        background-color: #008CBA; 
        color: white; 
        
      }

      
    </style>

    <link href="s.css" rel="stylesheet" type="text/css">
    <link href="r.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">

  </head>



  <body>
    
    <div class="container">
      
      <?php 
        require_once '../include/admin_header.php';
      ?>



      <div class="content home">
      <h2>Reviews</h2>
      <p>Check out the below reviews for our website.</p>
      
      <!--
      <button class="button button1" onclick="location.href= 'feedback.php';">Write a review</button>
      -->
      
      
      
      
      
      <?php 

    require_once '../include/order_class.php';
    require_once '../include/dbcon.php';

    //session_start();
    ?>

      
      
      <?php
      $sql= "SELECT * FROM reviews";
      $row=mysqli_query($link,$sql);

       foreach ($row as $rows){ 
       ?>
       
      <div class="review">
        
        <h3 class="name"><?=htmlspecialchars($rows['name'], ENT_QUOTES)?></h3>
        <div>
        <span class="rating"><?=str_repeat('&#9733;', $rows['star'])?></span>
        </div>
        <p class="content"><?=htmlspecialchars($rows['review'], ENT_QUOTES)?></p>

        <h4 class="name"> Comment Classified as : </h4>
        <p class="content"><?=htmlspecialchars($rows['dominant'], ENT_QUOTES)?></p>
        <div class= "hline-bottom"></div>
      </div>
      <?php 
       }
      ?>
            
            
      
    </div>
    
      <?php 
        require_once '../include/footer.php';
      ?> 

    </div>


    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>