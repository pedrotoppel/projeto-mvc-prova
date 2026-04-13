<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="turmas.php?turma=modelupdate" method="POST">
        <input type="hidden" name="id" value="<?= $turma["id"] ?>">
        <input type="text" name="nome" value="<?= $turma["nome"] ?>">
        <input type="number" name="curso_id" value="<?= $turma["curso_id"] ?>">
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>