function cadastro() {
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var number= document.getElementById('number').value;
    var senha = document.getElementById('senha').value;
    var confirm_senha = document.getElementById('confirm_senha').value;

    if((nome.length !== 0 && email.length !== 0 && number.length !== 0 && senha.length !== 0 &&confirm_senha.length !== 0) && (senha === confirm_senha)) {

        var objeto = {
            nome: nome,
            email: email,
            telefone: number,
            senha: senha,
        };
        console.log("Isso é um objeto", objeto);
        console.log("Acessar nome no objeto", objeto.nome);

        fetch("http://localhost/imovi/cadastrar.php", {
            method: "POST",
            body: JSON.stringify(objeto),
            headers: {"Content-type": "application/json; charset=UTF-8"},
        })
            .then((response) => response.json())
            .then((json) => console.log(json))
            .catch((err) => console.log(err));

        document.getElementById('success').style.display = 'block';
        document.getElementById('error').style.display = 'none';

        setTimeout(() => {
            document.getElementById('success').style.display = "none";
        }, 5000);
    } else {
        document.getElementById('success').style.display = 'none';
        document.getElementById('error').style.display = 'block';
    }

    

}