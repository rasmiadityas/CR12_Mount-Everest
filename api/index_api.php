<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API GetTravel - Info Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <?php require_once '../components/style.php' ?>

</head>

<body class="container">
    <fieldset>
        <h1>API: GetTravel</h1>
        <h4>JSON Output from DB 'cr12_mounteverest_rasmisilasari'</h4>
        <hr>

        <p><u>JSON format:</u> <br>
            status: 200 (when successful)<br>
            count: the number of records found<br>
            data:id, name, state, price, descript, lat, lng, pic, days, info <br>
        </p>
        <p><u>All data:</u> <br>
            <a href='gettravel.php' target="_blank">gettravel.php</a>
        </p>
        <p><u>Data per ID:</u> <br>
            <a href='gettravel.php?id=1' target="_blank">gettravel.php?id=_</a>
        </p>
        <p><u>Search in a specific category:</u><br>
            <a href='gettravel.php?cat=name&q=vienna' target="_blank">gettravel.php?cat=_&q=_</a>
            <br>e.g. cat=name&q=vie, cat=state&q=vor, etc
        </p>
        <p><u>Search in multiple categories:</u><br>
            <a href='gettravel.php?find=austria' target="_blank">gettravel.php?find=_</a>
            <br>search in categories: name, state, description
        </p>
        <br>
        <a href="../dashboard.php" class="btn btn-light">Dashboard</a>
        <a href="../index.php" class="btn btn-light">Homepage</a>

    </fieldset>

    <p class="mt-4 text-muted" align="middle">&copy; Rasmi, 2021</p>

</body>

</html>