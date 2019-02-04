function verificacao() {
	var userName = document.getElementById('userName')
	var button = document.getElementById('button')
	if ( (userName.value.trim() != '') && (button.className.includes(' disabled')) ) {
		button.className = button.className.replace(' disabled','')
	}
	if ( (userName.value.trim() == '') && !(button.className.includes(' disabled')) ) {
		button.className = button.className + ' disabled'
	}
}