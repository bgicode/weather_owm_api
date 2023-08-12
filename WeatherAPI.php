<?php

require_once 'SxGeo.php';

$city = 'Москва';


if (($_REQUEST['doGo']) or ($_REQUEST['doGoGeo'])) {

$city = $_REQUEST['city'];
	
	if ($_REQUEST['doGoGeo']){
		function getIp(){
			$keys = [
				'HTTP_CLIENT_IP',
				'HTTP_X_FORWARDED_FOR',
				'REMOTE_ADDR'
			];
			foreach ($keys as $key) {
				if(!empty($_SERVER[$key])){
					$ip = trim(end(explode(',', $_SERVER[$key])));
					if (filter_var($ip, FILTER_VALIDATE_IP)) {
						return $ip;
					}
				}
			}
		}

		$ip = getIp();		
		$SxGeo = new SxGeo('SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY);
		$cityInfoForIp = $SxGeo->getCityFull($ip);
		$cityForIp = $cityInfoForIp['city']['name_ru'];

		$city = $cityForIp;
	};	
		
	$units;
	$unitsWindSpeed;
	// $unitsTemp;
	$unitsPressue;
	
	if (!($_REQUEST['units'])){
		$units = 'metric';
		$unitsWindSpeed = ' м/с';
		// $unitsTemp = ' <sup>o</sup>C';
		$unitsPressue = ' мм рт. ст.';
	} else if ($_REQUEST['units']){
		$units = 'imperial';		
		$unitsWindSpeed = ' миль/ч';
		// $unitsTemp = ' <sup>o</sup>F';
		$unitsPressue = ' гПа';
	}

	// forecast

	$url = 'https://api.openweathermap.org/data/2.5/forecast';
$options = array(
	'q' => $city,
	'APPID' => 'f8821479d99a15b40f370c7c305ed51f',
	'units' => $units,
	'lang' => 'en',
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));

$respons = curl_exec($ch);
$data = json_decode($respons, true);

curl_close($ch);



$temperatur = round($data['list'][0]['main']['temp']);

$iconCode = $data['list'][0]['weather'][0]['icon'];

$weatherIconImg = 'https://api.openweathermap.org/img/w/' . $iconCode . '.png';

$descriptionEn = $data['list'][0]['weather'][0]['main'];

$descriptionClouds = $data['list'][0]['weather'][0]['description'];

$description;

if($descriptionClouds == 'few clouds'){
	$description = "Переменная облачность";
}elseif (($descriptionClouds == 'scattered clouds') OR ($descriptionClouds == 'broken clouds') OR ($descriptionClouds == 'overcast clouds')){
	$description = "Переменная облачность";
}

switch ($descriptionEn) {	
	case 'Clear':
		$description = "Ясно";
			break;
	case 'Rain':
			$windDirection = "Дождь";
			break;
	case 'Drizzle':
			$windDirection = "Дождь";
			break;
	case 'Thunderstorm':
			$windDirection = "Гроза";
			break;										
	};

if (!($_REQUEST['units'])){
	$windSpeed = round($data['list'][0]['wind']['speed']);
} else if ($_REQUEST['units']){
	$windSpeed = round($data['list'][0]['wind']['speed'], 2);
}

$windDeg = $data['list'][0]['wind']['deg'];
$windDirection;


switch (true) {	
	case ($windDeg >= 0) && ($windDeg <= 22):
			$windDirection = "северный";
			break;
	case ($windDeg > 22) && ($windDeg <= 68):
			$windDirection = "северо-восточный";
			break;
	case ($windDeg > 68) && ($windDeg <= 102):
			$windDirection = "восточный";
			break;
	case ($windDeg > 102) && ($windDeg <= 158):
			$windDirection = "юго-восточный";
			break;
	case ($windDeg > 158) && ($windDeg <= 202):
			$windDirection = "южный";
			break;
	case ($windDeg > 202) && ($windDeg <= 248):
			$windDirection = "юго-западный";
			break;
	case ($windDegc > 248) && ($windDeg <= 292):
			$windDirection = "западный";
			break;
	case ($windDeg > 292) && ($windDeg <= 338):
			$windDirection = "северо-западный";
			break;
	case ($windDeg > 338) && ($windDeg <= 360):
			$windDirection = "северный";
			break;										
	};

$pressureImp = round($data['list'][0]['main']['pressure']);
$pressureMetric = round($pressureImp/1.33);
$pressure = $units == 'imperial' ? $pressureImp : $pressureMetric; 

$humidity = $data['list'][0]['main']['humidity'];

$chancePrecipitation = ($data['list'][0]['pop'])*100;

}


?>