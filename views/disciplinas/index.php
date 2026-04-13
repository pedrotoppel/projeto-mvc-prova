<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>PROFESSOR</th>
            <th>TURMA</th>
            <th>OPÇÕES</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
        ?>

            <tr>

                <td><?php echo $row['id'] ?></td>
                <td><?php echo htmlspecialchars($row["nome"]) ?></td>
                <td><?php echo htmlspecialchars($row["professor_id"]) ?></td>
                <td><?php echo htmlspecialchars($row["turma_id"]) ?></td>
                <td>
                    <a href="disciplinas.php?disciplina=viewupdate&id=<?= $row["id"] ?>">Atualizar</a>
                    <a href="disciplinas.php?disciplina=delete&id=<?= $row["id"] ?>">excluir</a>
                </td>
            </tr>

        <?php } ?>
    </table>
    <a href="disciplinas.php?disciplina=viewpost">Nova Disciplina</a>

</body>

</html>