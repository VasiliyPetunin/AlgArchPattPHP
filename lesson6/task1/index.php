<?php

namespace Observer;

use Observer\Entity\PHPProgrammer;
use Observer\Entity\Vacation;
use Observer\Observer\NewVacationObserver;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Observer/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$programmer = new PHPProgrammer("Pavel", "bb@kk.ru", "5 years");

$observer1 = new NewVacationObserver();

$programmer->attach($observer1);

$vac = new Vacation("Super PHP-Programmer", "Over 100 years of coding");

$programmer->publishNewVacation($vac);