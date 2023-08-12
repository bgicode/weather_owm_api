
document.addEventListener("DOMContentLoaded", () => {
	
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


