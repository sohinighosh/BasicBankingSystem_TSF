<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="intro" style="background-color : #fff;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3 style="color:#fff">Welcome to </h3>
                  <h1 style="color: #fff;">OUR BANK</h1>
                </div>
              </div>

            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.gif" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #fff; color:#000; font-weight:bold;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transaction.gif" style="width: 400px; height:300px;" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #fff; color:#000; font-weight:bold;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.gif" class="img-fluid" style="width: 400px; height:300px;">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #fff; color:#000; font-weight:bold;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
      |  Copyright © 2021 bankig_system.com  |   All Rigths Reserved!
        <br>
        
        | Back to top | Privacy | Terms
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>