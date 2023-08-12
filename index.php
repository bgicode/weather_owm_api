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
			<div class="search-form" id="search-form">
				<input class="search_form_input" type="text" name="city" id="" value=<?php echo $city ?>>
				<input class="search_form_send" id="doGo" type="submit" name="doGo" value="OK">
			</div> 

			<div class="options_wrap">				
				<div class="selected_sity"><?php echo $city ?></div>				
				<div class="switch_wrap">
					<sub>O  &nbsp</sub>
					<label class="switch" for="check" >
						<input id="check" type="checkbox" class="switch_input" name="units" onclick="switch_units()" <?php if (!empty($_GET['units'])) echo 'checked' ?>>
						<div class="switch_slider_C">C</div>
						<div class="switch_slider_F">F</div>					
					</label>
				</div>
			</div>

			<div class="change_sity_wrap">
				<div class="change_sity" >
					<span>Сменить город</span>					
				</div>
				<label class="doGoGeo" for="doGoGeo">
					<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M22.489 5.83819L5.23895 16.6268L13.728 18.2769L18.2146 25.7637L22.489 5.83819Z" fill="white" fill-opacity="0.4"/>
					</svg>
					<input class="change_sity_by_ip" id="doGoGeo" type="submit" name="doGoGeo" value="Моё местоположение">
				<label for=""></label>
			</div>			     
    </form>		

		<div class="main">
			<div class="temp_wrap">
				<div class="temp_info">
					<div id="icon"></div>		
					<div class="temp">
						<span class="temp_value"><?php echo $temperatur ?></span>
						
					</div>
				</div>
			</div>
			<div class="descrip">
				<div class="description_value"><?php echo $description ?></div>				
			</div>	
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
					<div class="parameter_title windDir_title">Направление ветра</div>
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
	<script type="text/javascript" src="main.js"></script>		
</body>
</html>