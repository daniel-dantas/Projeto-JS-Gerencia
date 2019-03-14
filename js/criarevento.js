var gambiarra = 0

function opcaoDoPreco() {
    var radio = document.getElementsByName('custo')
    var newinput = '<div id="novoinput" class="input-field col m10 offset-m1"><input id="preco" name="preco" type="text" class="validate" oninput=""><label for="preco">Preço</label></div>'
    var formulario = document.getElementsByTagName('form')[0]
    if (radio[0].checked == true) {
        if (gambiarra == 1) {
            document.getElementsByTagName('form')[0].removeChild(document.getElementById('novoinput'))
            gambiarra = 0
        }
    } else {
        if (gambiarra == 0) {
            formulario.innerHTML += newinput
            radio[1].checked = true
            gambiarra = 1
        }
    }
}