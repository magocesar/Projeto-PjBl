

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

    if(document.getElementById('senha1').value == ''){
        document.getElementById('errorJs').innerHTML = 'O campo "Senha" está vazio.'
        document.getElementById('senha1').focus()
        return false
    }

    if(document.getElementById('senha2').value == ''){
        document.getElementById('errorJs').innerHTML = 'O campo "Senha" está vazio.'
        document.getElementById('senha2').focus()
        return false
    }

    if(document.getElementById('senha1').value != document.getElementById('senha2').value){
        document.getElementById('errorJs').innerHTML = 'As senhas digitadas devem ser iguais.'
        return false
    }

    document.getElementById('errorJs').innerHTML = ''

    return true
}