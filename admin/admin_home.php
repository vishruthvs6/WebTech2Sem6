<?php 
  session_start(); 

  if (empty($_SESSION['a_id']) or empty($_SESSION['username'])) {
    header("Location: index.php"); 
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">

    <title>FoodPark | Admin | Home</title>
  </head>
  <body>
    
    <div class="container">
      
    <?php require '../include/admin_header.php'; ?> 


      <div class="container" style="margin-top: 20px;">
        <div class="row">

           <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="../img/customer_info.jpg" alt="Card image" style="width:100%">
                
                <div class="card-body">
                  <a href="view_customer.php" class="btn btn-primary">View Customer Info</a>
                </div>

              </div>
          </div>
          
          <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="../img/sanman_logo.jpg" alt="Card image" style="width:100%">
                
                <div class="card-body">
                  <a href="view_food.php?category=sanman" class="btn btn-primary">View Sanman Items</a>
                </div>

              </div>
          </div>
          
          <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="../img/sagar_logo.jpg" alt="Card image" style="width:100%">

                <div class="card-body">
                 
                  <a href="view_food.php?category=sagar" class="btn btn-primary">View Sagar Items</a>
                </div>
            
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="../img/agarwal_logo.jpg" alt="Card image" style="width:100%">
                
                <div class="card-body">
                
                  <a href="view_food.php?category=agarwal" class="btn btn-primary">View Agarwal Items</a>
                </div>
              </div>
          </div>
        </div>


        <div class="row mt-3">

           <!--<div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="../img/ts1.jpg" alt="Card image" style="width:100%">
                
                <div class="card-body">
                  <a href="view_food.php?category=ts" class="btn btn-primary">View Today's Special </a>
                </div>

              </div>
          </div> -->
          
          <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="../img/add_item.jpg" alt="Card image" style="width:100%">
                
                <div class="card-body">
                  <a href="add_item.php" class="btn btn-primary">Add New Item</a>
                </div>

              </div>
          </div>
          
          <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="../img/order3.png" alt="Card image" style="width:100%">

                <div class="card-body">
                 
                  <a href="view_bills.php" class="btn btn-primary">View Order/Bill </a>
                </div>
            
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="../img/collection.jpg" alt="Card image" style="width:100%">
                
                <div class="card-body">
                
                  <a href="cash_collection.php" class="btn btn-primary">View Per Day Collection</a>
                </div>
              </div>
          </div>
        </div>


      
      <?php require '../include/footer.php'; ?> 

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>