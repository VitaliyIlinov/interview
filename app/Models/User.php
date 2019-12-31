<?php

namespace app\Models;

use app\Core\Session\SessionManager;

class User extends BaseModel
{
    public const CREDENTIAL = [
        'login' => 'admin',
        'pass'  => 'admin',
    ];

    /**
     * @var SessionManager
     */
    private $sessionManager;

    /**
     * User constructor.
     *
     * @param SessionManager $sessionManager
     */
    public function __construct(SessionManager $sessionManager)
    {
        $this->sessionManager = $sessionManager;
    }

    public function hasRole($role): bool
    {
        return $this->user() === $role;
    }

    public function user(): ?string
    {
        return $this->sessionManager->get('role');
    }

    public function can()
    {

    }

}