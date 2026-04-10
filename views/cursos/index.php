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
    <th>TURMA</th>
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
            <a href="cursos.php?curso=viewupdate&id=<?= $row["id"] ?>">Atualizar</a>
            <a href="cursos.php?curso=delete&id=<?= $row["id"]?>">excluir</a>
        </td>
    </tr>

<?php } ?>
</table>
    <a href="cursos.php?curso=viewpost">Novo Aluno</a>

</body>
</html>