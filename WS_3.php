<?php
//endpoint: https://api.spotify.com/v1/users/{user_id}
//consuming a ws with php curl
//response: json in string format
//transform the response into an associative array
try {
    $header_accept = "Accept: application/json";
    $header_content_type = "Content-Type: application/json";
    $header_authorization = "Authorization: Bearer BQA-vpumDabaNlDW5hEQIoYOvanmMpr84gEwoVaKB3ISXceLSBdvlMKOjj2TmXlsBDsB-w1YsDc2Sa7CWhjciSASEdFdERAH1bV1d-3-fKR0-Ld94LR3pbCwJIQHxhbgq-gjFSLUEwDsCsfeB5KLBQ9tpM0dd58";
    header('Content-Type: application/json');

     $ch = curl_init('https://api.spotify.com/v1/me');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($header_accept,  $header_content_type,  $header_authorization));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPGET, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    echo $result."\n";
    echo var_dump($result)."\n";//string
    $json_result = json_decode($result, true);//true: to be used as an associative array

    echo "display name: ".$json_result["display_name"]."\n";
    echo "uri: ".$json_result["uri"]."\n";
    echo "href: ".$json_result["href"]."\n";
    echo "type: ".$json_result["type"]."\n";
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}

 ?>
