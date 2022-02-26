
function Enviar(){

    let nome = document.querySelector("#nome").value

    let sobrenome = document.querySelector("#sobrenome").value

    let email = document.querySelector("#email").value

    let senha = document.querySelector("#senha").value

    let data = document.querySelector("#data").value

    if(nome == '' || sobrenome == '' || email == '' || senha == '' || data == ''){

        alert('Preencha corretamente todos os campos!')

    }

    else{

        alert('Cadastro realizado com sucesso!')

        var clientes = [nome, sobrenome, email, senha, data,]

        console.log(clientes)

        document.querySelector("#nome").value = ''

        document.querySelector("#sobrenome").value = ''

        document.querySelector("#email").value = ''

        document.querySelector("#senha").value = ''

        document.querySelector("#data").value = ''
        
    }
    
}


function Entrar(){

let usuario =  document.getElementById('usuario').value

let senha = document.getElementById('senha').value

   if(usuario == '' || senha == ''){
       alert('Digite um usuário e uma senha válida')
       console.log(login)
   }
   else {
       alert('Parabéns, Vc entrou')

       let trocar = document.querySelector("#cadastro")

       trocar.innerHTML = usuario

       //Aplicando DOM no elemento HTML ao logar
       document.getElementById('cadastro').style.color="black";
       
       document.getElementById('cadastro').style.backgroundColor="#ffff00";

   }
}



