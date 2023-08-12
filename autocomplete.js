
document.addEventListener("DOMContentLoaded", () => {

	

	switch (document.querySelector('.description_value').innerText) {
		case 'Ясно':
			document.getElementById('icon').classList.add('clear');
			break;
		case 'Гроза':
			document.getElementById('icon').classList.add('thunderstorm');
			break;
		case 'Дождь':
			document.getElementById('icon').classList.add('rain');
			break;
		case 'Дождь':
			document.getElementById('icon').classList.add('rain');
			break;
		case 'Облачно':
			document.getElementById('icon').classList.add('scattered_clouds');
				break;	
		default:
			document.getElementById('icon').classList.add('clouds');
	}
	



	if (!(sessionStorage.getItem('weatherStor'))){		
		document.getElementById('doGo').click();		
	};
	sessionStorage.setItem('weatherStor', 1);

	if (document.querySelector('.switch_input').checked ) {
		
		document.querySelector('.switch_slider_F').classList.add('switch_slider_Color');
		document.querySelector('.switch_slider_C').classList.remove('switch_slider_Color');
	}else{
		
		document.querySelector('.switch_slider_C').classList.add('switch_slider_Color');
		document.querySelector('.switch_slider_F').classList.remove('switch_slider_Color');
	};
});


