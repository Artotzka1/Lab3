<?php
$title_name = 'Мочалов А.А. / 231-361 / Лабораторная работа №3';
$menu_items = [
    ['url' => 'index.php', 'title' => 'Главная'],
    ['url' => 'about.php', 'title' => 'О нас'],
    ['url' => 'contact.php', 'title' => 'Контакты']
];

function get_active_class($url) {
    return ($url == basename($_SERVER['PHP_SELF'])) ? 'active' : '';
}

function generate_menu_item($url, $title) {
    $active_class = get_active_class($url);
    return '<li><a href="' . $url . '" class="' . $active_class . '">' . $title . '</a></li>';
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title_name; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <?php
            foreach ($menu_items as $item) {
                echo generate_menu_item($item['url'], $item['title']);
            }
            ?>
        </ul>
    </nav>
</header>
