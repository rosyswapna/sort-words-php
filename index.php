<?php 
$words = array(
    "GMAIL",
    "YAHOO",
    "OUTLOOK",
    "HUBSPOT",
    "AOL",
    "YANDEX",
    "GMX");

function getResult($a,$b)
{
	$alphabets = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charSumA = $charSumB = 0;
	foreach(str_split($a) as $char){
		$charSumA += strpos($alphabets, $char)+1;
	}
	foreach(str_split($b) as $char){
		$charSumB += strpos($alphabets, $char)+1;
	}
	return ($charSumA > $charSumB) ? -1 : 1;	
}
uasort($words,'getResult');
print_r($words);

?>
