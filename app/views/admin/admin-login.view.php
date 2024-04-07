<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import '<?= CSS . 'global.css?v=' . time() ?>';

        body {
            height: 100vh;
            background-color: var(--color-background);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            color: var(--color-text);
            font-family: var(--font-text);
            padding: 5px;
        }

        input {
            padding: 5px;
            border-radius: 4px;
        }

        input[type="submit"]{
            background-color: var(--color-detach);
            font-weight: bold;
            transition: 200ms;
            margin-top: 5px;
        }

        input[type="submit"]:hover{
            cursor: pointer;
            filter: grayscale(40%);
        }
    </style>
</head>
<body>
    <form action="/admin" method="post">
        <p>Senha</p>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Entrar">
    </form>
</body>
</html>