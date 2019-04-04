var gambiarra = 0

function opcaoDoPreco() {
    var radio = document.getElementsByName('custo')
    if (radio[0].checked == true) {
        if (gambiarra == 1) {
            document.getElementsByTagName('form')[0].removeChild(document.getElementById('novoinput'))
            gambiarra = 0
        }
    } else {
        if (gambiarra == 0) {
            var newinput = document.createElement('div')
            newinput.id = 'novoinput'
            newinput.className = 'input-field col m10 offset-m1'
            newinput.innerHTML = '<input id="preco" name="preco" type="text" class="validate" oninput=""><label for="preco">Preço</label>'
            var formulario = document.getElementsByTagName('form')[0]
            formulario.insertBefore(newinput, formulario.childNodes[18])
            gambiarra = 1
        }
    }
}
