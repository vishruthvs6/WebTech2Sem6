<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<title>Reviews</title>
		
		
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
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link href="r.css" rel="stylesheet" type="text/css">
		
	</head>
	
	
	
	
	
	
	<body>
	
	
	
	
	
	 <div class="container">
    
      <?php require 'include/header.php'; ?>

   
      <?php if (isset($_GET['error']) and $_GET['error'] === 'login'): ?>
          
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Oops! That was an invalid login.</strong> Try again
          </div>
          
      <?php endif; ?>


      <?php if (isset($_GET['order']) and $_GET['order'] === 'cancel' and isset($_SESSION['orders']) === false): ?>
          
          <div class="alert alert-info alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Your order has been canceled</strong>
          </div>
          
      <?php endif; ?>


     
     <?php if (!empty($_GET['cus_reg'])): ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>You've been registered successfully!</strong>
          Now, log in to buy food
        </div>

      <?php endif; ?>

	
	
	    
		<div class="content home">
			<h2>Reviews</h2>
			<p>Check out the below reviews for our website.</p>
			
			<button class="button button1" onclick="location.href= 'feedback.php';">Write a review</button>
			
			
			
			
			
			<?php 

		require_once 'include/order_class.php';
		require_once 'include/dbcon.php';

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
				<div class= "hline-bottom"></div>
			</div>
			<?php 
			 }
			?>
						
						
			
		</div>
		 <?php 
        require 'include/footer.php';
      ?>
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>
  </body>

</html>