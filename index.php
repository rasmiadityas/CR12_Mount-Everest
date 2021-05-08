<?php
require_once 'components/db_connect.php';

// select data
$res = mysqli_query($connect, "SELECT * FROM travel");
$rows = $res->fetch_all(MYSQLI_ASSOC);

$connect->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mount Everest - Home</title>
    <?php require_once 'components/style.php'; ?>

</head>

<body>
    <header>
        <?php include 'components/navbar.php'; ?>

        <div class="position-relative overflow-hidden p-3 p-md-3 m-md-3 text-center bg-light" style="
      background-image: url('https://i1.wp.com/wiesbaden-lebt.de/wp-content/uploads/2020/10/Alpen-31.jpg?resize=1500%2C640&ssl=1');
    ">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.4);">
                <div class="col-md-5 p-lg-5 mx-auto my-1">
                    <h1 class="display-6 font-weight-normal text-white" style="font-family: Georgia">Your Ultimate Gateway to Austrian Charms</h1>
                    <p class="lead font-weight-normal text-white" style="font-family: Helvetica">Discover the secrets of Austrian living:<br>schnitzel eating, snow sporting, mountain hiking, coffee drinking in a cafe for 3 hours without doing anything.<br>You name it, we'll live it.</p>
                </div>
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            </div>
        </div>
    </header>

    <div class="container d-flex flex-wrap p-2">

        <?php
        foreach ($rows as $row) {
            echo "<div class='card m-2 border' style='width: 12rem;'>
                    <img src='" . $row['pic'] . "' class='card-img-top'>
                    <div class='card-body d-flex flex-column'>
                <h5 class='card-title'><a href='details.php?id=" . $row['id'] . "'>" . $row['name'] . "</a></h5>
                <p class='card-text'>" . $row['state'] . "</p>
                <p class='card-text'>" . $row['price'] . " € | " . $row['days'] . " days</p>
                        <p class='card-text' id='desccut'>" . $row['descript'] . "</p>
                        <a href='details.php?id=" . $row['id'] . "' class='btn btn-outline-dark'>View</a>                        
                    </div>
                </div>";
        }
        ?>

    </div>

</body>

</html>