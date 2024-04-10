<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR</title>
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
    <style>
        @import '<?= HOST . CSS . 'global.css?v=' . time() ?>';

        h1{
            color: var(--color-detach);
        }
        
        body {
            height: 100vh;
            background-color: var(--color-background);
            font-family: var(--font-detach);
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <h1><?= $e->getMessage() ?></h1>
</body>
</html>