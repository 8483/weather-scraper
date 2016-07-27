<?php

	$city = $_GET["city"];
	
	$city = str_replace(" ", "", $city);
	
	$contents = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

	//preg_match("/a/i", "apples are awesome", $matches);
	
	$code = '3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)<'; // (.*?) returns everything found between two words in a string. Characters needed escaping.
	
	preg_match("/".$code."/i", $contents, $matches);
	
	//print_r($matches);
	
	echo $matches[1];
?>