<?php
require_once '../../components/db_connect.php';

// receive input data via form
if ($_POST) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $state = $_POST['state'];
    $price = $_POST['price'];
    $descript = $_POST['descript'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $pic = $_POST['pic'];
    $days = $_POST['days'];
    $info = $_POST['info'];

    // NULL input handling
    if ($name == "") {
        $name = "N/A";
    }
    if ($state == "") {
        $state = "N/A";
    }
    if ($price == "") {
        $price = 0;
    }
    if ($descript == "") {
        $descript = "N/A";
    }
    if ($lat == "") {
        $lat = 0;
    }
    if ($lng == "") {
        $lng = 0;
    }
    if ($pic === "") {
        $pic = $defpic;
    }
    if ($days == "") {
        $days = 0;
    }
    if ($info == "") {
        $info = "#";
    }

    // DB query
    $sql = "UPDATE travel SET
	name = '$name',
state = '$state',
price = $price,
descript = '$descript',
lat = $lat,
lng = $lng,
pic = '$pic',
days = $days,
info = '$info'
	WHERE id = {$id}";

    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "<b>The record below is successfully updated.</b><br>
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
        $message = "<b>Error while updating data. </b><br>" . $connect->error;
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
    <title>Mount Everest - Edit Data Confirmation</title>
    <?php require_once '../../components/style.php' ?>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Edit Media Confirmation</h1>
        </div>
        <div class="alert alert-<?php echo $class; ?>" role="alert">
            <p><?php echo $message; ?></p>

            <a href='../update.php?id=<?php echo $id; ?>'><button class='btn btn-outline-warning' type='button'>Edit</button></a>&nbsp
            <a href='../../details.php?id=<?php echo $id ?>'><button class='btn btn-outline-info' type='button'>View</button></a>&nbsp
            <a href='../../dashboard.php'><button class='btn btn-outline-primary' type='button'>Dashboard</button></a>&nbsp
            <a href='../../index.php'><button class='btn btn-outline-success' type='button'>Homepage</button></a>


        </div>
    </div>
</body>

</html>