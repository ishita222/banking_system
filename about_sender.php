<?php
include('connection.php');
include 'navbar.php';

$sql = "SELECT * FROM `customer`";
$result = mysqli_query($conn, $sql);
// mysqli_close($conn);
?>

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
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $sender = $_POST['Name'];
            $_SESSION["Name"] = $sender;
            $query = "SELECT * FROM customer WHERE Name ='$sender'";
            $result = mysqli_query($conn, $query);
            $customer = mysqli_fetch_assoc($result);
            echo "<h2><u>About The Sender</u></h2><br>
                <h4> Name: " . $sender . "</h4>
                <h4> Email: " . $customer['Email'] . "</h4>
                <h4> Current Balance : " . $customer['Current_Balance'] . "</h4>";
        }
        ?>

<br> 
        <a href="transact.php" class="btn btn-primary">Transfer</a><br><br>

        <div>
</body>

</html>