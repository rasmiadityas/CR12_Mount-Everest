<?php

/****************************************
 *######## RESTful WEB SERVICE ##########
 *
 * Client process the request via URL to get the JSON result.
 * https://rasmi.codefactory.live/api_gettravel/gettravel.php?id=1
 * More information see the page below
 * https://rasmi.codefactory.live/api_gettravel/index_api.php
 ****************************************/

header("Content-Type:application/json");
require_once("db_check.php");

// Function for delivering a JSON response
function response($status, $data)
{
    $response['status'] = $status;
    $response['count'] = count($data);
    $response['data'] = $data;
    //Generating JSON from the $response array
    $json_response = json_encode($response);
    // Outputting JSON to the client
    echo $json_response;
}

// call the function with parameter 200 and $rows
response(200, $rows);
