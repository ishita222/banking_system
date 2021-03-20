<?php
include('connection.php');
include 'navbar.php';

//selecting data to show
$sql = "SELECT * FROM `customer`";
$result = mysqli_query($conn, $sql);
// mysqli_close($conn);
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
        <form action="about_sender.php" method="POST">
            <section>

                <div>
                    <table cellpadding="10" cellspacing="10" class="table table-striped table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sno.</th>
                            <th>Name</th>
                            <th>Current Balance</th>
                        </tr>
                        </thead>
                        <?php
                        $sno = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $sno = $sno + 1;
                            echo "<tr>
                                <td scope='row'>" . $sno . "</td>
                                <td>" . $row['Name'] . "</td>
                                <td>" . $row['Current_Balance'] . "</td>
                                </tr>";
                        }

                        ?>
                    </table>
                </div>

            </section>
            <section class="container drop-down">
                <br>
                <label for="Names"><b>Select a User to Start Transaction : </b></label><br>
                <select name="Name" id="Name">
                    <option value="" disabled selected>Select User</option><br><br><br><br>
                    <?php
                    $query = "SELECT * FROM `customer` ORDER BY `customer`.`Name` ASC";
                    $query_run = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($query_run)) {
                        echo "<option value='" . $row['Name'] . "'>" . $row['Name'] . "</option>";
                    }
                    mysqli_close($conn);
                    ?>
                </select><br><br>
                <div class="container">
                    <button class="btn btn-dark">Submit</button><br><br><br>

                </div>
            </section>
        </form>
    </div>
</body>

</html>