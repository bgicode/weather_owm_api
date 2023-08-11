<?php
require_once 'WeatherAPI.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css" >
</head>
 <body onload="load()"> 
	<div class="wrap">
		<form id="myForm" action="<?php $_SERVER['REQUEST_URI'] ?>" method="get" name="frm1">
			<div><?php echo $city ?></div>
			<label class = "switch" for="" onclick="switch_units()">
				<input type="checkbox" class="switch_input" name="units" <?php if (!empty($_GET['units'])) echo 'checked' ?>>
				<span class="switch_slider"></span>
			</label>
			<div class="search-form" id="search-form">
				<input class="search_form_input" type="text" name="city" id="" value=<?php echo $city ?>>
				<input class="search_form_send" id="doGo" type="submit" name="doGo" value="OK">
			</div>      
    </form>
		<div class="temp_wrap">
			<div class="temp_info">
				<div id="icon"><img id="wicon" src=<?php echo $weatherIconImg ?>></div>		
				<div class="temp">
					<span class="temp_value"><?php echo $temperatur ?></span>
					<span class="temp_units"><?php echo $unitsTemp ?></span>
				</div>
			</div>
		</div>
		<div class="descrip">
			<div><?php echo $description ?></div>
		</div>		
		
		<div class="parameter_title_wrap">

			<div class="wind_wrap">
				<div class="parameter_title wind_title">Ветер</div>
				<div class="wind_speed">
					<span class="parameter wind_speed_value"><?php echo $windSpeed ?></span>
					<span class="wind_speed_units"><?php echo $unitsWindSpeed ?></span>
				</div>
			</div>

			<div class="pressue_wrap">
				<div class="parameter_title pressue_title">Давление</div>
					<div class="pressue">
					<span class="parameter pressue_value"><?php echo $pressure ?></span>
					<span class="pressue_units"><?php echo $unitsPressue ?></span>
				</div>
			</div>

			<div class="windDir_wrap">
				<div class="parameter_title windDir_title">Направление</div>
				<div class="parameter"><?php echo $windDirection ?></div>	
			</div>

			<div class="humi_wrap">
				<div class="parameter_title humi_title">Влажность</div>
				<div class="parameter"><?php echo $humidity ?> %</div>	
			</div>

			<div class="chanceP_wrap">
				<div class="parameter_title chanceP_title">Вероятность осадков</div>
				<div class="parameter"><?php echo $chancePrecipitation ?> %</div>
			</div>		
				
			
					
		</div>

		</div>
		
	<script type="text/javascript" src="./unitsChange.js"></script>
	<script type="text/javascript" src="autocomplete.js"></script>		
</body>
</html>