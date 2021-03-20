<?php
include 'navbar.php';
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSF BANK</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>

  <div class="container">
    <div class="row align-items-end">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="transfer-money-concept-illustration_114360-4165.jpg" alt="Card image cap">
          <div class="card-body">
            <a href="choose_user.php" class="btn btn-primary">Make a Transaction</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="peeps.jpg" alt="Card image cap">
          <div class="card-body">
            <a href="view.php" class="btn btn-primary">View All Users</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="online-banking_24908-60038.jpg" alt="Card image cap">
          <div class="card-body">
            <a href="alltransactions.php" class="btn btn-primary">Transaction History</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center mt-5 py-2">
    <p>Made with &hearts; by <b>Ishita Goudar</b> <br> <b><u> During Graduate Rotational Internship Programme(GRIP-THE SPARKS FOUNDATION)</u></b> </p>
  </footer>
</body>

</html>