<?php
// Conexão com o banco de dados (substitua pelos seus dados)
$servidor = "localhost";
$usuario = "seu_usuario";
$senha = "sua_senha";
$banco = "nome_do_banco";

// Conexão
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebendo os dados do formulário
$nome = $_POST['nome'];
$genero = $_POST['genero'];
$contato = $_POST['contato'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$perguntaa = $_POST['perguntaa'];
$perguntab = $_POST['perguntab'];
$genero = $_POST['genero'];
$genero = $_POST['genero'];
$genero = $_POST['genero'];
$telefone = $_POST['telefone'];

// Preparando o comando SQL para inserção de dados
$sql = "INSERT INTO usuarios (nome, genero, contato, idade, email, cidade, perguntaa, perguntab) VALUES ('$nome', '$genero', '$contato','$idade','$email''$cidade''$perguntaa''$contato''$contato''$contato''$contato''$contato''$contato')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechando a conexão
$conn->close();
?>
