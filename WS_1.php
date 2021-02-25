<?php
/*
https://developer.spotify.com/console/get-playlist-followers-contains/

JSON array 1 element
[
true,
]

JSON array 3 elements
[
true,
false,
false
]

ids
jmperezperez,thelinmichael,wizzler

JSON OBJECT
{
  "jmperezperez": true
}

3 elements

{
  "jmperezperez": true,
  "thelinmichael": false,
  "wizzler": false
}

JSON STRING
"{
  "jmperezperez": true
}"

"{
  "jmperezperez": true,
  "thelinmichael": false,
  "wizzler": false
}"
*/

//crear JSON amb <?php

$jmperezperez= array (true, false, false);
echo "PHP array<br>";
echo var_dump($jmperezperez)."<br>";
echo print_r($jmperezperez)."<br>";

echo $jmperezperez_json = json_encode($jmperezperez);
echo "<br>JSON format array<br>";
echo var_dump($jmperezperez_json)."<br>";
echo print_r($jmperezperez_json)."<br>";

$jmperezperez_json_decode = json_decode($jmperezperez_json);
echo "<br>JSON decode<br>";
echo var_dump($jmperezperez_json_decode)."<br>";
echo print_r($jmperezperez_json_decode)."<br>";

$elements_3='{
  "jmperezperez": true,
  "thelinmichael": false,
  "wizzler": false
}';
echo "3 elements string format<br>";
echo var_dump($elements_3)."<br>";
echo print_r($elements_3)."<br>";

$result_arr_ass=json_decode($elements_3, true);
echo "jmperezperez".$result_arr_ass["jmperezperez"];
echo "thelinmichael".$result_arr_ass["thelinmichael"];
echo "wizzler".$result_arr_ass["wizzler"];
?>
