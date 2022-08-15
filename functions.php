<?php

function fixtures() {
$response = [
    "http" => [
        "method" => "GET",
        "header" => "Content-Type: application/json\r\n" .
            "X-RapidAPI-Host: football98.p.rapidapi.com\r\n" .
            "X-RapidAPI-Key: 26633e28f7mshd9a836d8ec70a10p1a1c4ajsn1dd9bd8e6807\r\n"
    ]
];

$context = stream_context_create($response);
$url = file_get_contents('https://football98.p.rapidapi.com/premierleague/fixtures', false, $context);

// decode JSON
$fixtures = json_decode($url, true);

// get the data
return $fixtures;
}

function table() {
    $response = [
    "http" => [
        "method" => "GET",
        "header" => "Content-Type: application/json\r\n" .
            "X-RapidAPI-Host: football98.p.rapidapi.com\r\n" .
            "X-RapidAPI-Key: 26633e28f7mshd9a836d8ec70a10p1a1c4ajsn1dd9bd8e6807\r\n"
    ]
];

$context = stream_context_create($response);
$url = file_get_contents('https://football98.p.rapidapi.com/premierleague/table', false, $context);

// decode JSON
$table = json_decode($url, true);

// get the data
return $table;

}

function results() {
    $response = [
    "http" => [
        "method" => "GET",
        "header" => "Content-Type: application/json\r\n" .
            "X-RapidAPI-Host: football98.p.rapidapi.com\r\n" .
            "X-RapidAPI-Key: 26633e28f7mshd9a836d8ec70a10p1a1c4ajsn1dd9bd8e6807\r\n"
    ]
];

$context = stream_context_create($response);
$url = file_get_contents('https://football98.p.rapidapi.com/premierleague/results', false, $context);

// decode JSON
$results = json_decode($url, true);

// get the data
return $results;

}


function searchYoutube($q){
    $q=urlencode($q);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=6&q='.$q.'&key=AIzaSyDuup9R603lc9dRwFkZsP2RjhePmMBXd54'); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array();
    $headers[] = 'Accept: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return json_decode($result,true);
}