<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title??'Portifólio' ?></title>
    <link rel="stylesheet" href="<?= CSS . $css ?>">
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/cdd96683ff.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php require $view ?>
    <script src="<?= JS . 'script.js' ?>"></script>
</body>
</html>