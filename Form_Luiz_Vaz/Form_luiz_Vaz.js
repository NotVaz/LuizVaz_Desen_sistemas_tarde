//Executar mascaras
function mascara(o,f) {
    objeto=o
    funcao=f
    setTimeout("executaMascara()")
    }
    function executaMascara(){
        objeto.value=funcao(objeto.value)
    }

    //mascaras

    //mascara do telefone

    function rg(variavel){
        variavel=variavel.replace(/\D/g,"")
        variavel=variavel.replace(/(\d{2})(\d)/,"$1.$2")
        variavel=variavel.replace(/(\d{3})(\d)/,"$1.$2")
        variavel=variavel.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
        return variavel
    }
  
    function cpf(variavel){
        variavel=variavel.replace(/\D/g,"")
        variavel=variavel.replace(/(\d{3})(\d)/,"$1.$2")
        variavel=variavel.replace(/(\d{3})(\d)/,"$1.$2")
        return variavel

    }

    //mascra dp CEP
    function cep(variavel) {
        //remove tudo o que não é digito
        variavel=variavel.replace(/\D/g,"")
        variavel=variavel.replace(/(\d{2})(\d)/,"$1-$2")
        return variavel
    }

    function N(variavel){
        variavel=variavel.replace(/\D/g,"")
        return variavel
    }

    function l(variavel){
        variavel=variavel.replace(/[0-9]/g,"")
        return variavel
    }