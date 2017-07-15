<?php
$userName = 'Анна';
$userAge = '26';
$userEmail = 'a.davydova@netology.ru';
$userCity = 'Moscow';
$userStory = 'А это краткий текст обо мне';
?>

<html lang="ru">
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;
        }

        dl {
            display: table-row;
        }

        dt, dd {
            display: table-cell;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
<h1>Страница пользователя <?= $userName?></h1>
<dl>
    <dt>Имя</dt>
    <dd><?= $userName?></dd>
</dl>
<dl>
    <dt>Возраст</dt>
    <dd><?= $userAge?></dd>
</dl>
<dl>
    <dt>Адрес электронной почты</dt>
    <dd><a href="<?= $userEmail?>"><?= $userEmail?></a></dd>
</dl>
<dl>
    <dt>Город</dt>
    <dd><?= $userCity?></dd>
</dl>
<dl>
    <dt>О себе</dt>
    <dd><?= $userStory?></dd>
</dl>
</body>
</html>
