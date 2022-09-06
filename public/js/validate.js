function validate() {
    var conteudo = document.getElementById('password').value;

    if((conteudo.length < 8) || (conteudo.length > 14)){
        alert("Tamanho de senha invalido")
        return false;
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
                        return true;
                    }else{
                        alert("Senha deve conter dois numeros");
                        return false;
                    }
                }else{
                    alert("Senha deve conter pelo menos uma letra maiusculo e minusculo");
                    return false;
                }
            }else{
                alert("Senha contem menos de dois simbolos #@!$");
                return false;
            }

        }else{
            alert("primeira algarismo deve ser uma letra")
            return false;
        }
    }
    
}