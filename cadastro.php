<?php
// Incluir a conexão com o banco de dados
include('conexao.php');

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegar os dados do formulário e sanitizar (proteger contra injeções)
    $Nome = $_POST['Nome'];
    $Data_de_Nascimento = $_POST['Data_de_Nascimento'];
    $Email = $_POST['Email'];
    $Telefone = $_POST['Telefone'];
    $Curso = $_POST['Curso'];
    $Turma = $_POST['Turma'];
    $Matricula = $_POST['Matricula'];

    // Construir a query SQL para inserir no banco
    $sql = "INSERT INTO alunos (nome_completo, data_nascimento, email, telefone, curso, turma, matricula) 
            VALUES ('$Nome', '$Data_de_Nascimento', '$Email', '$Telefone', '$Curso', '$Turma', '$Matricula')";
    // Verificar se a inserção foi bem-sucedida
    if (mysqli_query($conn, $sql)) {
        header("Location: cadastro_alunos.php");
        exit;
    } 
    else {
        echo "Erro" . mysqli_error($conn);
    }
}
?>