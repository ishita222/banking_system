<?php
include 'navbar.php';
include 'connection.php';

$sql = "SELECT * FROM `customer`";
$result = mysqli_query($conn,$sql);
mysqli_close($conn);
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
        <h2 class="text-center pt-4">USER LIST</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-striped table-dark">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col" class="text-center py-2">Sno.</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">EMail</th>
                            <th scope="col" class="text-center py-2">Current Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                        <?php 
                        $sno = 0;
                        while($row = mysqli_fetch_assoc($result)){
                        $sno = $sno + 1;
                        echo "<tr>
                        <td scope='row'>". $sno . "</td>
                        <td>". $row['Name'] . "</td>
                        <td>". $row['Email'] . "</td>
                        <td>". $row['Current_Balance'] . "</td>
                        </tr>";
                        }
                        ?>
                    </table>
                    <div>
                     <a href="choose_user.php" class="btn btn-dark">Select User</a> <br> <br>
                    </div>
                    </div>
                </div>
            </div> 
         </div>
         </body>
</html>