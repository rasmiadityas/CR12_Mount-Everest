<?php
require_once '../components/db_connect.php';

// select data to delete
if ($_GET['id']) {
    $id = $_GET['id'];
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
        header("location: ../error.php");
    }
    $connect->close();
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mount Everest - Delete Data</title>
    <?php require_once '../components/style.php'; ?>

</head>

<body>
    <fieldset>
        <legend class='h2 mb-3'>Delete Data</legend>
        <b>You have selected the data below.</b>
        <br><br>
        <table class="table w-75 mt-3">
            <tr>
                <?php
                echo "Name: $name<br>
            State: $state<br>
            Price: $price €<br>
			Duration: $days days<br>
			Latitude: $lat<br>
            Longitude: $lng<br>
            Description: $descript<br>
			Info: $info<br>
			<br><img src='$pic' width='200' alt='$name'><br>";
                ?>
            </tr>
        </table>
        <hr>
        </tr>
        </table>

        <h4 class="mb-4">Do you really want to delete this data?</h4>
        <form action="actions/a_delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <button class="btn btn-outline-danger" type="submit">Yes, Delete</button>
            <a href='../details.php?id=<?php echo $id ?>'><button class='btn btn-outline-info' type='button'>View</button></a>
            <a href='../dashboard.php'><button class='btn btn-outline-primary' type='button'>Dashboard</button></a>
            <a href='../index.php'><button class='btn btn-outline-success' type='button'>Homepage</button></a>&nbsp

        </form>
        <br><br>
    </fieldset>
</body>

</html>