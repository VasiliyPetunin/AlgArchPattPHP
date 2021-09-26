<?php

declare(strict_types = 1);

namespace Service\Communication;

use Model;
use Service\Communication\Exception\CommunicationException;

interface ICommunication
{
    /**
     * Точка входа по формированию и отправке сообщения пользователю
     *
     * @param Model\Entity\User $user
     * @param string $templateName
     * @param array $params
     *
     * @return void
     *
     * @throws CommunicationException
     */
    public function process(Model\Entity\User $user, string $templateName, array $params = []): void;
}
