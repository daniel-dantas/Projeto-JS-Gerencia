function verificacao() {
	var inputs = document.getElementsByTagName('input')
	var button = document.getElementById('cadastrar')
	var controle = Array.from(inputs).every(function (e) {
		return e.value.trim() != ''
	})
	if ( (controle == 0) && !(button.className.includes(' disabled')) ) {
		button.className = button.className + ' disabled'
	}
	if ( (controle == 1) && (button.className.includes(' disabled')) ) {
		button.className = button.className.replace(' disabled','')
	}
}