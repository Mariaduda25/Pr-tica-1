<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM chamados WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Chamado excluído com sucesso";
    } else {
        echo "Erro ao excluir chamado: " . $conn->error;
    }
} else {
    echo "ID do chamado não informado.";
}
?>