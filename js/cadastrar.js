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

function geolocalizacao () {
    $.ajax({
        url: "https://geoip-db.com/jsonp",
        jsonpCallback: "callback",
        dataType: "jsonp",
        success: function( location ) {
        	var estado = document.getElementById('estado')
        	estado.value = location.state
        	estado.parentNode.lastElementChild.className = 'active'
        	var cidade = document.getElementById('cidade')
        	cidade.value = location.city
        	cidade.parentNode.lastElementChild.className = 'active'
        }
    });
}