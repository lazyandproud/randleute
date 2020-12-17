<?php

$url = 'https://de.wikipedia.org/w/api.php?action=query&list=categorymembers&cmtitle=Kategorie:Vertreter_einer_Verschw%C3%B6rungstheorie&cmlimit=200&format=json';
$content = file_get_contents($url);
$response=json_decode($content, true);
$randleute=array_rand($response['query']['categorymembers'], 3);
echo $response['query']['categorymembers'][$randleute[0]]['title']." vergleicht ".$response['query']['categorymembers'][$randleute[1]]['title']." mit ".$response['query']['categorymembers'][$randleute[2]]['title'];

?>
