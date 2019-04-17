function validar() {
    var x = document.getElementsByName("password")[0].value;
    var y = document.getElementsByName("confirm-password")[0].value;
    var especiais = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/; 
    var upper = false;
    var numerico = false;
    var especial = false;
    var charTest = '';
    var i = 0;

    if (x !== y){
        alert("As senhas não coincidem");
        return false;
    }

    if (x.length <= 7){
        alert("Sua senha precisa ter no mínimo 8 digitos ou mais!");
        return false;
    }

    for (i=0; i<=x.length;i++){
        charTest = x.charAt(i);
        if (charTest == charTest.toUpperCase()) {
            upper = true;
        }
        if (!isNaN(charTest * 1)) {
            numerico = true;
        } 
    }

    if (especiais.test(x)) {
        especial = true;
    }

    if (especial && numerico && upper){
        return true; 
    } else {
        alert("SENHA INCORRETA! Verifique se a senha contém pelo menos um caractere especial, uma letra maiúscula e um número!!");
        return false;
    }
}

