<?php

declare(strict_types = 1);

namespace Service\User;

use Model;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Security implements ISecurity
{
    private const SESSION_USER_IDENTITY = 'userId';

    /**
     * @var SessionInterface
     */
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @inheritdoc
     */
    public function getUser(): ?Model\Entity\User
    {
        $userId = $this->session->get(self::SESSION_USER_IDENTITY);

        return $userId ? (new Model\Repository\User())->getById($userId) : null;
    }

    /**
     * @inheritdoc
     */
    public function isLogged(): bool
    {
        return $this->getUser() instanceof Model\Entity\User;
    }

    /**
     * @inheritdoc
     */
    public function authentication(string $login, string $password): bool
    {
        $user = $this->getUserRepository()->getByLogin($login);

        if ($user === null) {
            return false;
        }

        if (!password_verify($password, $user->getPasswordHash())) {
            return false;
        }

        $this->session->set(self::SESSION_USER_IDENTITY, $user->getId());

        // Здесь могут выполняться другие действия связанные с аутентификацией пользователя

        return true;
    }

    /**
     * @inheritdoc
     */
    public function logout(): void
    {
        $this->session->set(self::SESSION_USER_IDENTITY, null);

        // Здесь могут выполняться другие действия связанные с разлогиниванием пользователя
    }

    /**
     * Фабричный метод для репозитория User
     *
     * @return Model\Repository\User
     */
    protected function getUserRepository(): Model\Repository\User
    {
        return new Model\Repository\User();
    }
}
