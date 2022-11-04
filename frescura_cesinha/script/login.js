
function btnApagar(){
    document.getElementById('form').reset()

    document.getElementById('errorJs').innerHTML = ''
}

function btnSubmit(){
    if(verificar()){
        document.getElementById('form').submit()
    }
}

function verificar(){
    if(document.getElementById('login').value == ''){
        document.getElementById('errorJs').innerHTML = 'O campo "Login" está vazio.'
        document.getElementById('login').focus()
        return false
    }

    if(document.getElementById('senha').value == ''){
        document.getElementById('errorJs').innerHTML = 'O campo "Senha" está vazio.'
        document.getElementById('senha').focus()
        return false
    }

    document.getElementById('errorJs').innerHTML = ''

    return true
}