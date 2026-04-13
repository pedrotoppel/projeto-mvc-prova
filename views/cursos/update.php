<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cursos.php?curso=modelupdate" method="POST">
        <input type="hidden" name="id" value="<?= $curso["id"] ?>">
        <input type="text" name="nome" value="<?= $curso["nome"] ?>">
        <input type="number" name="area_id" value="<?= $curso["area_id"] ?>">
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>