<?php
require_once "functions.php";
require_once "data.php";

$title = $app_name . " | Главная";

$content = include_template("index.php");
$svg = include_template("common/svg.php");
$menuList = ["История", "Производство", "Ассортимент", "Где купить"];
$menu = include_template("common/menu.php", ["menu" => $menuList]);
$header = include_template("common/header.php", ["menu" => $menu]);
$footer = include_template("common/footer.php", ["menu" => $menu]);

$layout_content = include_template(
    "layout.php",
    [
        "header" => $header,
        "content" => $content,
        "footer" => $footer,
        "title" => $title,
        "svg" => $svg,
    ]
);
print($layout_content);
