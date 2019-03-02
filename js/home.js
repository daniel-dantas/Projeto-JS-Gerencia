function carregarDados () {
  document.getElementById('corpo-principal').innerHTML += estrutura()
}

function estrutura () {
  var retorno = '<div class="card large"><div class="card-image waves-effect waves-block waves-light"><img class="activator" src="'
  retorno += 'https://s.calendarr.com/upload/08/96/carnaval-f.png?t=1551409211'
  retorno += '"></div><div class="card-content"><span class="card-title activator grey-text text-darken-4">'
  retorno += 'Nome do evento'
  retorno += '<i class="material-icons right">more_vert</i></span><p>'
  retorno += 'Leve descrição sobre o evento buscando mostrar suas caracteríscticas mais chamativas'
  retorno += '</p></div><div class="card-reveal"><span class="card-title grey-text text-darken-4">'
  retorno += 'Nome do evento'
  retorno += '<i class="material-icons right">close</i></span><p>'
  retorno += 'Informações de contato, sites, organizador e coisas do gênero'
  retorno += '</p></div></div></div>'
  return retorno
}