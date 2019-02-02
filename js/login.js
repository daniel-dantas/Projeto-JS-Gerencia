function verificacao () {
	var userName = document.getElementById('userName')
	var password = document.getElementById('password')
	var button = document.getElementById('button')
	if ( (userName.value.trim() != '') && (password.value.trim() != '') && (button.className.includes(' disabled')) ) {
		button.className = button.className.replace(' disabled','')
	}
	if ( ((userName.value.trim() == '') || (password.value.trim() == '')) && !(button.className.includes(' disabled')) ) {
		button.className = button.className + ' disabled'
	}
}