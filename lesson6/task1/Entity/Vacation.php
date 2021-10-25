<?php

namespace Observer\Entity;

class Vacation
{
    private $vacName;

    private $requirements;

    public function __construct(string $vacName, $requirements)
    {
        $this->vacName = $vacName;
        $this->requirements = $requirements;
    }
}