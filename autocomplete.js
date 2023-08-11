
document.addEventListener("DOMContentLoaded", () => {
	
	if (!(sessionStorage.getItem('weatherStor'))){		
		document.getElementById('doGo').click();
		alert("DOM готов!");
	};
	sessionStorage.setItem('weatherStor', 1);
	
});


