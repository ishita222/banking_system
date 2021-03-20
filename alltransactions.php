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
<div>
            <table cellpadding="20" cellspacing="10" class="table table-striped table-dark">
                <tr>
                    <th>Sno.</th>
                    <th>Sender</th>
                    <th>Receiver</th>
                    <th>Amount</th>
                    <th>Time</th>
                </tr>
                <?php 
                 $sql = "SELECT * FROM transfer_complete";
                 $result = mysqli_query($conn, $sql);
                 $nums=mysqli_num_rows($result);
                    $sno = 0;
                    while($row=mysqli_fetch_array($result)){

                        $sno = $sno + 1;
                        echo "<tr>
                        <th scope='row'>". $sno . "</th>
                        <td>". $row['Sender'] . "</td>
                        <td>". $row['Receiver'] . "</td>
                        <td>". $row['Amount'] . "</td>
                        <td>". $row['Time'] . "</td>
                        </tr>";
                    }
                ?>


            </table>
            </div>
            </div>
            </body>

</html>