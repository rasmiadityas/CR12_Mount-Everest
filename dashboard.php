<?php
header('Content-Type: text/html; charset=UTF-8');
require_once 'components/db_connect.php';

$sql = "SELECT * FROM travel";
$result = mysqli_query($connect, $sql);
$numrow = mysqli_num_rows($result);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mount Everest - Dashboard</title>
    <?php require_once 'components/style.php'; ?>
</head>

<body>

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h1><b>Mount Everest Travel</b></h1>
                            <h2><b>Dashboard</b></h2>
                            <h3><b>Found: <?php echo $numrow; ?> Record(s)</b></h3>
                        </div>
                        <div class="col-sm-7">
                            <a href="api/index_api.php" class="btn btn-secondary"><i class="material-icons">&#xe880;</i> <span>API: GetTravel</span></a>
                            <a href="crud/create.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Record</span></a>
                            <a href="index.php" class="btn btn-secondary"><i class="material-icons">&#xe88a;</i> <span>Go to Homepage</span></a>

                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Num/ID</th>
                            <th>Name</th>
                            <th class='price'>Price</th>
                            <th>Duration</th>
                            <th class='left'>Info</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if (mysqli_num_rows($result)  > 0) {
                            $i = 1;

                            foreach ($rows as $row) {
                                echo "<tr>";
                                echo "<td style='text-align: center';>" . $i . "/" . $row['id'] . "</td>";
                                if ($row['name'] == '') {
                                    echo "<td><a href='details.php?id=" . $row['id'] . "'><img src='" . $row['pic'] . "' class='avatar' alt='N/A'>
                                    <br>N/A</a></td>";
                                } else {
                                    echo "<td><a href='details.php?id=" . $row['id'] . "'><img src='" . $row['pic'] . "' class='avatar' alt='" . $row['name'] . "'><br>"
                                        . $row['name'] . "</a></td>";
                                }
                                if ($row['price'] == '') {
                                    echo "<td>N/A</td>";
                                } else {
                                    echo "<td>" . $row['price'] . " € </td>";
                                }
                                if ($row['days'] == '') {
                                    echo "<td>N/A</td>";
                                } else {
                                    echo "<td>" . $row['days'] . " days </td>";
                                }
                                if ($row['descript'] == '') {
                                    echo "<td class='left'>N/A<br>";
                                    if ($row['info'] == '') {
                                        echo "<a href='#'>N/A</a></td>";
                                    } else {
                                        echo "<a href='" . $row['info'] . "' target='_blank'>" . $row['info'] . "</a></td>";
                                    }
                                } else {
                                    echo "<td class='left'>" . $row['descript'] . "<br>";
                                    if ($row['info'] == '#') {
                                        echo "<a href='#'>N/A</a></td>";
                                    } else {
                                        echo "<a href='" . $row['info'] . "' target='_blank'>" . $row['info'] . "</a></td>";
                                    }
                                }
                                echo "<td><a href='details.php?id=" . $row['id'] . "' class='view' title='View' data-toggle='tooltip'><i class='material-icons'>&#xE417;</i></a>
                            <a href='crud/update.php?id=" . $row['id'] . "' class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>
                            <a href='crud/delete.php?id=" . $row['id'] . "' class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a>
							</td>";
                                echo "</tr>";
                                $i++;
                            };
                        } else {
                            echo  "No Data Available";
                        }

                        ?>

                    </tbody>
                </table>

            </div>
            <p class="mt-4 text-muted" align="middle">&copy; Rasmi, 2021</p>
        </div>
    </div>
</body>

</html>