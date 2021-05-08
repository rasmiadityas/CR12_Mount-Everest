<?php
require_once '../../components/db_connect.php';

// receive data
if ($_POST) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM travel WHERE id = {$id}";
    $result = $connect->query($sql);

    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();

        $name = $data['name'];
        $state = $data['state'];
        $price = $data['price'];
        $descript = $data['descript'];
        $lat = $data['lat'];
        $lng = $data['lng'];
        $pic = $data['pic'];
        $days = $data['days'];
        $info = $data['info'];
    } else {
        header("location: ../../error.php");
    }

    // delete data
    $sql = "DELETE FROM travel WHERE id = {$id}";
    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "<b>The record below is successfully deleted.</b><br>
        <table class='table w-50'>
        <tr>
        ID: $id<br>
        Name: $name<br>
        State: $state<br>
        Price: $price €<br>
        Duration: $days days<br>
        Latitude: $lat<br>
        Longitude: $lng<br>
        Description: $descript<br>
        Info: $info<br>
        <br><img src='$pic' width='200' alt='$name'><br>
        </tr></table><hr>";
    } else {
        $class = "danger";
        $message = "Error while deleting data. <br>" . $connect->error;
    }
    $connect->close();
} else {
    header("location: ../../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mount Everest - Delete Data Confirmation</title>
    <?php require_once '../../components/style.php' ?>

</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Delete Data Confirmation</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?= $message; ?></p>

            <a href='../../dashboard.php'><button class='btn btn-outline-primary' type='button'>Dashboard</button></a>
            <a href='../../index.php'><button class='btn btn-outline-success' type='button'>Homepage</button></a>&nbsp&nbsp

        </div>
    </div>
</body>

</html>