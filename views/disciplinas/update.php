<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="disciplinas.php?disciplina=modelupdate" method="POST">
        <input type="hidden" name="id" value="<?= $disciplina["id"] ?>">
        <input type="text" name="nome" value="<?= $disciplina["nome"] ?>">
        <input type="number" name="professor_id" value="<?= $disciplina["professor_id"] ?>">
        <input type="number" name="turma_id" value="<?= $disciplina["turma_id"] ?>">
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>