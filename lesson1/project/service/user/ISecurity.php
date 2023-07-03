<?php

declare(strict_types = 1);

namespace Service\User;

use Model;

interface ISecurity
{
    /**
     * Получаем сущность пользователя по сессии
     *
     * @return Model\Entity\User|null
     */
    public function getUser(): ?Model\Entity\User;

    /**
     * Проверяет, является ли пользователь авторизованным
     *
     * @return bool
     */
    public function isLogged(): bool;

    /**
     * Производим операцию аутентификации
     *
     * @param string $login
     * @param string $password
     * @return bool
     */
    public function authentication(string $login, string $password): bool;

    /**
     * Выход из системы
     *
     * @return void
     */
    public function logout(): void;
}
