<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link href="build/css/style.css" rel="stylesheet">
</head>
<body class="body">
<div class="wrapper">
    <?= $svg ?>
    <div class="content">
        <?= $header ?>

        <main class="container">
            <?= $content ?>
        </main>
    </div>
    <footer class="footer">

    </footer>
</div>
<script src="build/js/script.js"></script>
</body>
</html>

