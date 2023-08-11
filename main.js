document.addEventListener("DOMContentLoaded", (e) => {
	document.querySelector('.change_sity').addEventListener('click', (e) =>{
		document.getElementById('search-form').classList.add('search-form_show');
	})

	document.querySelector('.switch_input').addEventListener('click', (e) =>{
		document.getElementById('search-form').classList.remove('search-form_show');
	})	
	
});
