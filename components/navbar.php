<?php
require_once 'api/RESTful.php';

$url = 'http://api.serri.codefactory.live/random/';
$res = curl_get($url);
$jres = json_decode($res); // turn the json into an object
$jokes = $jres->joke;
?>

<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <!-- <nav class="site-header sticky-top py-1"> -->

    <div class="container-fluid">

        <a class="navbar-brand" href="../index.php">Mount Everest</a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="nav navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="crud/create.php">Add Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="api/index_api.php">API: GetTravel</a>
                </li>

                <a id="getjoke" title='Entertain me!' href="#"><i class='material-icons'>&#xe815; </i>Get a Joke!</a>
                <li id="jokes" class="nav-link"><?php echo "<b>{ $jokes }</b>"; ?></li>

                <script>
                    document.querySelector("#getjoke").addEventListener("click", getJoke, false)

                    function getJoke() {
                        const request = new XMLHttpRequest(); //create a request
                        request.open("GET", "components/api_serri.php"); //get method, file, async
                        request.onload = function() { //when the request is loaded
                            let jokes = this.responseText; //response from opened

                            let output = "<b>{ " + jokes + " }</b>"; //declare output

                            document.querySelector("#jokes").innerHTML = output; //output printing
                        }
                        request.send(); //send request
                    }
                </script>

            </ul>
        </div> <!-- navbar-collapse -->

    </div><!-- container -->
</nav>