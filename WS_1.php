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
?>
