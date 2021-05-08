<?php
require_once '../components/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mount Everest - Create Data</title>
    <?php require_once '../components/style.php' ?>

</head>

<body>
    <fieldset>
        <legend class='h2'>Create Data</legend>
        <br><br>

        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Name</th>
                    <td><input class='form-control' type="text" name="name" placeholder="Name of Location" /></td>
                </tr>
                <tr>
                    <th>State</th>
                    <td><input class='form-control' type="text" name="state" placeholder="Name of State" /></td>
                </tr>
                <tr>
                    <th>Image URL</th>
                    <td><textarea class='form-control' rows="3" name="pic" placeholder="https://..."></textarea></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" step="any" name="price" placeholder="Price in €" /></td>
                </tr>
                <tr>
                    <th>Duration</th>
                    <td><input class='form-control' type="number" step="any" name="days" placeholder="Duration in Day(s)" /></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="number" step="any" name="lat" placeholder="Latitude" /></td>
                </tr>
                <tr>
                    <th>Longitude</th>
                    <td><input class='form-control' type="number" step="any" name="lng" placeholder="Longitude" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><textarea class='form-control' rows="5" name="descript" placeholder="Description"></textarea></td>
                </tr>
                <tr>
                    <th>Info URL</th>
                    <td><textarea class='form-control' rows="3" name="info" placeholder="https://..."></textarea></td>
                </tr>
            </table>
            <br>

            <button class='btn btn-outline-warning' type="submit">Create Data</button>&nbsp
            <a href='../dashboard.php'><button class='btn btn-outline-primary' type='button'>Dashboard</button></a>&nbsp
            <a href='../index.php'><button class='btn btn-outline-success' type='button'>Homepage</button></a>

            <br><br>

        </form>

    </fieldset>
</body>

</html>