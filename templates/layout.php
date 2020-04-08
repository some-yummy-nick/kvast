<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link href="./build/css/style.css" rel="stylesheet">
</head>
<body class="body">
<div class="wrapper">
    <?= $svg ?>
    <div class="content">
        <?= $header ?>
        <main>
            <?= $content ?>
        </main>
    </div>
    <?= $footer ?>
</div>
<script src="./build/js/script.js"></script>
</body>
</html>

