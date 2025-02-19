<?php include 'header.php'; ?>

<main>
    <h1>О нас</h1>
    <h2>Кто мы и над чем работаем?</h2>
    <p>На данном сайте публикуются разработки и тестовые варианты лабораторных работ.</p>

    <h2>Наш коллектив</h2>
    <ul>
        <?php
        $team_members = ['Владыкин А.А.', 'Петров А.З.', 'Дмитринский Г.М.','Кантемиров В.С.'];
        foreach ($team_members as $member) {
            echo '<li>' . $member . '</li>';
        }
        ?>
    </ul>
</main>

<?php include 'footer.php'; ?>
