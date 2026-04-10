<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
</head>
<body>

<table border="1">
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>TELEFONE</th>
    <th>OPCOES</th>
</tr>

<?php
    while($row = $result->fetch_assoc()){
?>

    <tr>
        
        <td><?php echo $row['id']?></td>
        <td><?php echo htmlspecialchars($row["nome"])?></td>
        <td><?php echo htmlspecialchars($row["email"])?></td>
        <td><?php echo htmlspecialchars($row["telefone"])?></td>
        <td>
            <a href="alunos.php?aluno=viewupdate&id=<?= $row["id"] ?>">Atualizar</a>
            <a href="alunos.php?aluno=delete&id=<?= $row["id"]?>">excluir</a>
        </td>
    </tr>

<?php } ?>
</table>
    <a href="alunos.php?aluno=viewpost">Novo Aluno</a>

</body>
</html>