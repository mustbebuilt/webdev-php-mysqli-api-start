<?php
require_once("../includes/config.php");
// JSON http header
header('Content-Type: application/json; charset=utf-8');
// query to get all films
$queryFilms = "SELECT * FROM Films";
$resultFilms = $mysqli->query( $queryFilms );
$resultsAr = array();
while ($obj = $resultFilms -> fetch_object()) {
			$resultsAr[] = $obj;			 
}
$json = json_encode($resultsAr);
echo $json;
?>