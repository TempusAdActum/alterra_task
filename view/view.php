<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовое задание</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="container">
    <form class="form addContactForm" method="post" action="../index.php">
        <div class="addContactForm__tittle padding border-bottom mb">
            Добавить контакт
        </div>
        <div class="addContactForm__inputs-block padding">

            <input class="addContactForm__input" type="text" placeholder="Имя" name="name"/>
            <input class="addContactForm__input js_phone" type="text" placeholder="Телефон" name="phone"/>
            <input type="hidden" name="action" value="add"/>
        </div>
        <div class="addContactForm__button-block padding">
            <button class="addContactForm__button js_buttonAdd" type="button">Добавить</button>
        </div>
    </form>
    <form class="form contacts" method="post" action="../index.php">
        <div class="contacts__tittle padding border-bottom">
            Список контактов
        </div>
        <div class="contacts__list">
            <?php
            foreach ($contacts as $contact) {
                echo '<div class="contact__block padding border-bottom">';
                echo '<p class="contact__name">' . $contact['name'] . ' <a class="contact__actionDelete js_actionDelete">×</a></p>';
                echo '<p class="contact__phone">' . $contact['phone'] . '</p>';
                echo '<input type="hidden" name="id" value="' . $contact['id'] . '"/>';
                echo '</div>';

            }
            ?>
        </div>
    </form>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"
        type="text/javascript"></script>
<script src="js/script.js"></script>
</body>

</html>
