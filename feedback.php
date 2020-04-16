<?php  session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
  

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="star.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <title>Feedback</title>
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



	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <!-- Default form contact -->
<form method="post" class="text-center border border-light p-5" action="phpInsight/examples/demo.php">

    <p class="h4 mb-4">Feedback Form</p>

    <!-- Name -->
	
    <input type="text" name='name' id="defaultContactFormName"  class="form-control mb-4" placeholder="Name">

    <!-- Email -->
    <input type="email" name='email'  id="defaultContactFormEmail"  class="form-control mb-4" placeholder="E-mail">


	<div class="form-group">
        <textarea name='textdata' class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
		
    </div>

	
	<div class="stars">

  
    <input class="star star-5" id="star-5" type="radio" name="star" value="5" />
    <label class="star star-5" for="star-5" val="5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
    <label class="star star-4" for="star-4" val="4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
    <label class="star star-3" for="star-3" val="3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
    <label class="star star-2" for="star-2" val="2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
    <label class="star star-1" for="star-1" val="1"></label>
 
</div>

   
   
   
   
   
   
   
   
 <br>
    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit" onclick="success()">Send</button>

</form>

        </div>
      </div>

  <script>
function success() {
  alert("Review Submitted!");
}
</script>

      
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
