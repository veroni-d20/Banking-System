<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">


  <title>Basic Banking System</title>
</head>

<body>

  <?php
  require_once 'config.php';
  include 'navbar.php';
  ?>
  <div class="container-fluid" >
    <div style="min-height: 80vh;" class="row intro py-1">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h1>SIMERA BANK</h1>
          <br>
          <h2 class="action text-white"><span>CHOOSE AN ACTION</h2></span>
          <div class="column activity text-center">
            <br>
            <div class="col-md act">
              <a href="transfermoney.php"><button>
                  <h3>View Customers to transfer<h3>
                </button></a>

            </div>
            <br>
            <div class="col-md act">
              <a href="transactionhistory.php"><button>
                  <h3>Transfer History<h3>
                </button></a>
            </div>

          </div>
        </div>
      </div>
      <!-- <div class="col-sm-12 col-md img text-center">
        <img class="im" src="img/bankHome.jpg">
      </div> -->
    </div>


    <br>

    <footer class="text-center text-white py-2">
      <p>Created by<b> Veroni Shwetha</b> <br>@ The Sparks Foundation</p>
    </footer>

  </div>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>