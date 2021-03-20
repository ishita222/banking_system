<?php
session_start();
$sender = $_SESSION["Name"];
include 'navbar.php';
include('connection.php');
//selecting data to show
$sql = "SELECT * FROM `customer`";
$result = mysqli_query($conn, $sql);
$customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
        <form action="transfer_done.php" method="POST"><br><br>
            <label for="SName"><b>Sender:</b></label><br>
            <select name="SName" id="SName"><br><br>
            <option value="<?php echo $sender;?>" selected><?php echo $sender;?>
            </option>
            </select>
            <br>

            <label for="RName"><b>Reciever</b></label><br>
            <select name="RName" id="RName"><br><br>
                <option value="" disabled selected>Select reciever</option><br><br>
                <?php
                $query = "SELECT * FROM `customer` ORDER BY `customer`.`Name` ASC";
                $query_run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($query_run)) {
                    echo "<option value='" . $row['Name'] . "'>" . $row['Name'] . "</option>";
                }
                mysqli_close($conn);
                ?>
            </select><br>
            <label for="amount"><b>Enter the amount to transfer :</b></label><br>
            <input type="number" name="amount" id="amount" placeholder="Amount">
            <br>
            <br>
            <button class="btn btn-primary" type="submit" id="amount_value">Submit</button><br><br>
    </div>

    </form>
    </div>
</body>

</html>