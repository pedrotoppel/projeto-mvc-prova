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
            <th>CURSO</th>
            <th>OPÇOES</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
        ?>

            <tr>

                <td><?php echo $row['id'] ?></td>
                <td><?php echo htmlspecialchars($row["nome"]) ?></td>
                <td><?php echo htmlspecialchars($row["curso_id"]) ?></td>
                <td>
                    <a href="turmas.php?turma=viewupdate&id=<?= $row["id"] ?>">Atualizar</a>
                    <a href="turmas.php?turma=delete&id=<?= $row["id"] ?>">excluir</a>
                </td>
            </tr>

        <?php } ?>
    </table>
    <a href="turmas.php?turma=viewpost">Nova Turma</a>

</body>

</html>