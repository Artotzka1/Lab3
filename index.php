<?php include 'header.php'; ?>

<main>
    <h1>Главная страница</h1>
    <p>Первое правило инженера: работает - не трогай. © Айтиллито Джавитто</p>

    <h2>Фотографии</h2>
    <?php
    $time = time();
    $even_image = 'https://cdn.tripster.ru/thumbs2/96e82566-847f-11ef-b246-8e8f6606cbb1.1220x600.jpeg';  
    $odd_image = 'https://truetravel.su/upload/medialibrary/d01/1200px_Matterhorn_from_Domh_tte_2.jpg';    
    
    if ($time % 2 == 0) {
        // Четное время
        echo '<a href="https://cdn.tripster.ru/thumbs2/96e82566-847f-11ef-b246-8e8f6606cbb1.1220x600.jpeg"><img src="' . $even_image . '" alt="Четная картинка" width="200"></a>';
        echo '<a href="https://truetravel.su/upload/medialibrary/d01/1200px_Matterhorn_from_Domh_tte_2.jpg"><img src="' . $odd_image . '" alt="Нечетная картинка" width="200"></a>';
    } else {
        // Нечетное время
        echo '<a href="https://truetravel.su/upload/medialibrary/d01/1200px_Matterhorn_from_Domh_tte_2.jpg"><img src="' . $odd_image . '" alt="Нечетная картинка" width="200"></a>';
        echo '<a href="https://cdn.tripster.ru/thumbs2/96e82566-847f-11ef-b246-8e8f6606cbb1.1220x600.jpeg"><img src="' . $even_image . '" alt="Четная картинка" width="200"></a>';
    }
    ?>
</main>

<?php include 'footer.php'; ?>
