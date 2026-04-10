<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="professores.php?action=modelupdate" method="POST">
        <input type="hidden" name="id" value="<?= $professor["id"] ?>">
        <input type="text" name="nome" value="<?= $professor["nome"] ?>">
        <input type="email" name="email" value="<?= $professor["email"] ?>">
        <input type="password" name="senha" placeholder="nova senha">
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>