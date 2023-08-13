
document.addEventListener("DOMContentLoaded", () => {
	

	switch (document.querySelector('.description_value').innerText) {
		case 'Ясно':
			document.getElementById('icon').classList.add('clear');
			document.getElementById('wrap').classList.add('wrap_color_clear');
			break;
		case 'Гроза':
			document.getElementById('icon').classList.add('thunderstorm');
			document.getElementById('wrap').classList.add('wrap_color_clouds');
			break;
		case 'Дождь':
			document.getElementById('icon').classList.add('rain');
			document.getElementById('wrap').classList.add('wrap_color_clouds');
			break;
		case 'Дождь':
			document.getElementById('icon').classList.add('rain');
			document.getElementById('wrap').classList.add('wrap_color_clouds');
			break;
		case 'Переменная облачность':
			document.getElementById('icon').classList.add('scattered_clouds');
			document.getElementById('wrap').classList.add('wrap_color_clear');
				break;	
		default:
			document.getElementById('icon').classList.add('clouds');
			document.getElementById('wrap').classList.add('wrap_color_clouds');
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


