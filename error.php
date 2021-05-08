<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mount Everest - Error Page</title>
    <?php require_once 'components/style.php' ?>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Invalid Request</h1>
        </div>
        <div class="alert alert-warning" role="alert">
            <p><b>You have made an invalid request.</b><br><br>
                Please go back and try again.</p>
            <br>
            <a href='dashboard.php'><button class='btn btn-outline-primary' type='button'>Dashboard</button></a>
            <a href='index.php'><button class='btn btn-outline-success' type='button'>Homepage</button></a>

        </div>
    </div>
</body>

</html>