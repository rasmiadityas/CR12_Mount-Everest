<?php
require_once '../components/db_connect.php';

// select data to populate form
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
    <title>Mount Everest - Edit Data</title>
    <?php require_once '../components/style.php'; ?>

</head>

<body>
    <fieldset>
        <legend class='h2'>Edit Data <img class='img-thumbnail rounded-circle' src='<?php echo $pic ?>' alt="<?php echo $name ?>"></legend>
        <br><br>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Name</th>
                    <td><input class='form-control' type="text" name="name" placeholder="Name of Location" value="<?php echo $name ?>" /></td>
                </tr>
                <tr>
                    <th>State</th>
                    <td><input class='form-control' type="text" name="state" placeholder="Name of State" value="<?php echo $state ?>" /></td>
                </tr>
                <tr>
                    <th>Image URL</th>
                    <td><textarea class='form-control' rows="3" name="pic" placeholder="https://..."><?php echo $pic ?></textarea></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" step="any" name="price" placeholder="Price in €" value="<?php echo $price ?>" /></td>
                </tr>
                <tr>
                    <th>Duration</th>
                    <td><input class='form-control' type="number" step="any" name="days" placeholder="Duration in Day(s)" value="<?php echo $days ?>" /></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="number" step="any" name="lat" placeholder="Latitude" value="<?php echo $lat ?>" /></td>
                </tr>
                <tr>
                    <th>Longitude</th>
                    <td><input class='form-control' type="number" step="any" name="lng" placeholder="Longitude" value="<?php echo $lng ?>" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><textarea class='form-control' rows="5" name="descript" placeholder="Description"><?php echo $descript ?></textarea></td>
                </tr>
                <tr>
                    <th>Info URL</th>
                    <td><textarea class='form-control' rows="3" name="info" placeholder="https://..."><?php echo $info ?></textarea></td>
                </tr>
            </table>
            <br>
            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <td><button class='btn btn-outline-warning' type=" submit">Save</button>&nbsp
                <a href='../details.php?id=<?php echo $id ?>'><button class='btn btn-outline-info' type='button'>Details</button></a>&nbsp
                <a href='../dashboard.php'><button class='btn btn-outline-primary' type='button'>Dashboard</button></a>&nbsp
                <a href='../index.php'><button class='btn btn-outline-success' type='button'>Homepage</button></a>

                <br><br>

        </form>

    </fieldset>
</body>

</html>