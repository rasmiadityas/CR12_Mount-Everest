<?php
// Require conn.php (DB connection) file
require_once("../components/db_connect.php");

// API type
if (isset($_GET["id"])) { // API1: per ID (gettravel.php?id=__)

    // URL get, DB query
    $where = ($_GET["id"] == "all") ? "" : " WHERE id= " . $_GET["id"];
} else if (isset($_GET["cat"]) && isset($_GET["q"])) { // API2: query per category (gettravel.php?cat=__&q=__)

    // URL get
    $cat = $_GET["cat"];
    $q = $_GET["q"];

    // DB query
    $where = " WHERE $cat LIKE '%$q%'";
} else if (isset($_GET["find"])) { // API3: find multiple category (gettravel.php?find=__)

    // URL get
    $find = $_GET["find"];

    // DB query
    $where = " WHERE name LIKE '%$find%' OR state LIKE '%$find%' OR descript LIKE '%$find%'";
} else { // API default: show all

    $where = "";
}

// DB fully query
$sql = "SELECT * FROM travel $where";

$result = mysqli_query($connect, $sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Close the DB connection
mysqli_close($connect);
