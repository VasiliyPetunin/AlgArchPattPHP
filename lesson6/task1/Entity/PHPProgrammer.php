<?php

declare(strict_types=1);

namespace Observer\Entity;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class PHPProgrammer implements SplSubject
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $workExp;

    /**
     * @var SplObjectStorage
     */
    private $observers;

    /**
     * UserObserver constructor.
     * @param string $name
     */
    public function __construct($name, $email, $workExp)
    {
        $this->name = $name;
        $this->email = $email;
        $this->workExp = $workExp;
        $this->observers = new SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * @inheritDoc
     */
    public function notify($vac)
    {
        foreach ($this->observers as $observer) {
            $observer->update($vac);
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function publishNewVacation($vac): void
    {
        $this->notify($vac);
    }

    public function subscribe($smth) : void
    {

    }

    public function unsubscribe($smth) : void
    {

    }
}