<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descricao = $_POST['descricao'];
    $criticidade = $_POST['criticidade'];
    $status = $_POST['status'];

    $sql = "INSERT INTO chamados (descricao, criticidade, status) VALUES ('$descricao', '$criticidade', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo chamado inserido com sucesso";
    } else {
        echo "Erro ao inserir chamado: " . $conn->error;
    }
}
?>
<!DOCTYPE html>