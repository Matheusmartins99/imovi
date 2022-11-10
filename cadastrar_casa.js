function cadastro() {
    var nome = document.getElementById('nome').value;
    var categoria = document.getElementById('categoria').value;
    var imagem = document.getElementById('imagem').value;

    if (nome.length !== 0 && categoria.length !== 0 && imagem.length !== 0) {

        var objeto = {
            nome: nome,
            categoria: categoria,
            imagem: imagem,
        };
        console.log("Isso é um objeto", objeto);
        console.log("Acessar nome no objeto", objeto.nome);

        fetch("http://localhost/imovi/cadastrar_casa.php", {
            method: "POST",
            body: JSON.stringify(objeto),
            headers: {"Content-type": "application/json; charset=UTF-8"},
        })
            .then((response) => response.json())
            .then((json) => console.log(json))
            .catch((err) => console.log(err));
    }

}