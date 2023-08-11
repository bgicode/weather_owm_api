
document.addEventListener("DOMContentLoaded", () => {
	
	if (!(sessionStorage.getItem('weatherStor'))){		
		document.getElementById('doGo').click();		
	};
	sessionStorage.setItem('weatherStor', 1);
	
});


