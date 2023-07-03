<?php

declare(strict_types=1);

namespace Observer\Observer;

use Observer\Entity\PHPProgrammer;
use Observer\Entity\Vacation;
use SplObserver;

class NewVacationObserver implements SplObserver
{
    /**
     * Метод вызывается, когда происходит вызов notify() у субъекта, за которым
     * наблюдаем. В нашем случае мы наблюдаем за User.
     * @param Vacation $subject
     */
    public function update($vac)
    {
        echo "Появилась новая вакансия - ".$vac->vacName."!";
        echo "Требования: ".$vac->requirements."!";
    }
}