function getLocalizacao () {
    $.ajax({
        url: "https://geoip-db.com/jsonp",
        jsonpCallback: "callback",
        dataType: "jsonp",
        success: function( location ) {
        	var estado = location.state;
        	var cidade = location.city;
                
                var cookieCidade = "cidadeGeo"+"="+cidade;
                document.cookie = cookieCidade;
                var cookieEstado = "estadoGeo"+"="+estado;
                document.cookie = cookieEstado;
        }
    });
}