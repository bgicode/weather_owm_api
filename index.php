<?php
require_once 'WeatherAPI.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
 <body onload="load()"> 
	<div class="wrap">
		<form id="myForm" action="<?php $_SERVER['REQUEST_URI'] ?>" method="get" name="frm1">
			<div><?php echo $city ?></div>
			<label class = "switch" for="" onclick="switch_units()">
				<input type="checkbox" class="switch_input" name="units" <?php if (!empty($_GET['units'])) echo 'checked' ?>>
				<span class="switch_slider"></span>
			</label>
			<div>
				<input type="text" name="city" id="" value=<?php echo $city ?>>
				<input id="doGo" type="submit" name="doGo" value="OK">
			</div>      
    </form>
		<div id="icon"><img id="wicon" src=<?php echo $weatherIconImg ?>></div>		
    <div class="temp">
			<span class="temp_value"><?php echo $temperatur ?></span>
			<span class="temp_units"><?php echo $unitsTemp ?></span>
		</div>
		<div><?php echo $description ?></div>
		<div class="wind_speed">
			<span class="wind_speed_value"><?php echo $windSpeed ?></span>
			<span class="wind_speed_units"><?php echo $unitsWindSpeed ?></span></div>
		<div class="pressue">
			<span class="pressue_value"><?php echo $pressure ?></span>
			<span class="pressue_units"><?php echo $unitsPressue ?></span>
		</div>
		<div><?php echo $windDirection ?><span></span></div>		
		<div><?php echo $humidity ?> %</div>
		<div><?php echo $chancePrecipitation ?> %</div>		
	</div>
	<script type="text/javascript" src="./unitsChange.js"></script>
	<script type="text/javascript" src="autocomplete.js"></script>		
</body>
</html>