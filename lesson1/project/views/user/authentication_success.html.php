<?php

/** @var \Model\Entity\User $user */
$body = function () use ($path, $user) {
    ?>
    Вы успешно авторизовались под логином <?= $user->getLogin() ?>
<?php
};

$renderLayout(
    'main_template.html.php',
    [
        'title' => 'Авторизация',
        'body' => $body,
    ]
);
