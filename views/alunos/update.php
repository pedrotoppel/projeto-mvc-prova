<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="alunos.php?aluno=modelupdate" method="POST">
        <input type="hidden" name="id" value="<?= $aluno["id"] ?>">
        <input type="number" name="turma_id" value="<?= $aluno["turma_id"] ?>">
        <input type="text" name="nome" value="<?= $aluno["nome"] ?>">
        <input type="email" name="email" value="<?= $aluno["email"] ?>">
        <input type="number" name="telefone" value="<?= $aluno["telefone"] ?>">
        <input type="password" name="senha" placeholder="nova senha">
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>