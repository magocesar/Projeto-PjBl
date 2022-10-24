
function btnApagar(){
    const login = document.getElementById("login")
    const senha = document.getElementById("senha")  
    login.value = senha.value = ''
}

function btnCadastrar(){
    window.location.assign("cadastro.php")
}

function btnSubmit(){
    //Verificar Dados do Form antes de enviar ao Banco de Dados, evita tréfego de rede desnecessário! --> Implementar Mais Tarde!
    document.getElementById('form').submit()
} 

