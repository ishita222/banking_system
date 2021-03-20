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
<br><br>
<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $sender = $_POST['SName'];
    $receiver = $_POST['RName'];
    $amount = $_POST['amount'];
}

if( $sender != $receiver && $amount>0){
    $sender_query = "SELECT * FROM customer WHERE Name ='$sender'";
    $sConn = mysqli_query($conn,$sender_query);
    $sResult=mysqli_fetch_assoc($sConn);
    $sBalance=$sResult['Current_Balance'];
    
    if($amount<$sBalance){
        $receiver_query = "SELECT * FROM customer WHERE Name ='$receiver'";
        $rConn = mysqli_query($conn,$receiver_query);
        $sResult = mysqli_fetch_array($rConn);
        $rBalance = $sResult['Current_Balance'];
        
        echo "<h1 class='success'> TRANSACTION DONE!</h1><br><br>
        <h1><b>Rs $amount </b>has been deducted from your account and successfully transfered to $receiver.</h1><br>";

        $sBalance-=$amount;
        $rBalance+=$amount;
        
        $sUpdate = "UPDATE `customer` SET `balance` = '$sBalance' WHERE `customer`.`Name` = '$sender';";
        $senderLogUpdate=mysqli_query($conn,$sUpdate);

        $rUpdate = "UPDATE `customer` SET `balance` = '$rBalance' WHERE `customer`.`Name` = '$receiver';";
        $recevierLogUpdate=mysqli_query($conn,$rUpdate);

        $history_query = "INSERT INTO `transfer_complete` (`sender`, `receiver`, `amount`, `time`) VALUES ('$sender', '$receiver', '$amount', current_timestamp())";
        $history = mysqli_query($conn,$history_query);
        
    }
    else echo "<h1 class='error'>Oops!!! Transaction Failed!</h1>
    <p>Insufficient balance. Please recharge your account to proceed further.</p>";
}
else if($sender == $receiver){
    echo "<h1 class='error'>Transaction Failed!</h1>
    <p>Sender and receiver cannot be same. Please select a different user.</p>";
}
?>
<a href='alltransactions.php' class="btn btn-primary">Transaction Details</a>
</div>
</body>
</html>