<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
</head>
<body>
    <script type="text/javascript">
        function validate() {
            var conteudo = document.getElementById('pass').value;
            if((conteudo.length < 8) || (conteudo.length > 14)){
                alert("Tamanho de senha invalido")
            }else{
                var letra = /[a-z]{1}/i;
                var conteudoCLetra = letra.exec(conteudo[0]);
                if (conteudoCLetra) {
                    var simbolos = /[#@!$]/g;
                    var conteudoCSimbolo = simbolos.exec(conteudo);
                    var auxi = "";
                    while(conteudoCSimbolo){
                        var n = conteudoCSimbolo.index;
                        auxi += conteudo[n];
                        conteudoCSimbolo = simbolos.exec(conteudo);
                    }
                    if (auxi.length>=2) {
                        var letrasMaiusculas = /[A-Z]/;
                        var letrasMinusculas = /[a-z]/;
                        var conteudoCMaiusculas = letrasMaiusculas.exec(conteudo);
                        var contedoCMinusculas = letrasMinusculas.exec(conteudo);     
                        if (conteudoCMaiusculas && contedoCMinusculas) {
                            var num = /[0-9]/g;
                            var conteudoCNumeros = num.exec(conteudo);
                            var auxin = "";
                            while(conteudoCNumeros){
                                var z = conteudoCNumeros.index;
                                auxin += conteudo[z];
                                conteudoCNumeros = num.exec(conteudo);
                            }
                            if (auxin.length>=2) {
                                alert("Senha valida");
                            }else{
                                alert("Senha deve conter dois numeros");
                            }
                        }else{
                            alert("Senha deve conter pelo menos um algarismo maiusculo e minusculo");
                        }
                    }else{
                        alert("Senha contem menos de dois simbolos");
                    }
                }else{
                    alert("primeira algarismo deve ser uma letra")
                }
            }
        }
    </script>
    <h1>Cadastre um usuário!</h1>
    <form action="{{url('/register')}}" method="POST">
        @csrf
        <label for="name">Nome: </label>
        <input required type="text" name="name" placeholder="Nome">
        <label for="date">Data de nascimento: </label>
        <input required type="date" name="date" placeholder="Data de nascimento">
        <label for="email">E-mail: </label>
        <input required type="email" name="email" placeholder="abc@escolar.ifrn.edu.br">
        <label for="pass">Senha: </label>
        <input required id="pass" type="password" name="password" placeholder="Senha">
        <label for="typerUser">Insira o tipo de usuário: </label>
        <input required type="text" name="userType" placeholder="Insira o tipo de usuario">
        <button onclick="validate()">Registrar</button>
    </form>
</body>
</html>