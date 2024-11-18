<?php

include 'conexao.php';

$sql = "SELECT * FROM chamados";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento de Chamados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Chamados</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Criticidade</th>
                <th>Status</th>
                <th>Cliente</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['titulo']; ?></td>
                <td>
                    <a href="editar_chamado.php?id=<?php echo $row['id']; ?>">Editar</a>
                    <a href="excluir_chamado.php?id=<?php echo $row['id']; ?>">Excluir</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="cadastrar_cliente.php">Cadastrar Novo Cliente</a>
    <a href="cadastrar_chamado.php">Cadastrar Novo Chamado</a>
</body>
</html>