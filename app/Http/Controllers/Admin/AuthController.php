<?php

namespace app\Http\Controllers\Admin;

use app\Models\User;
use app\Core\Request;
use app\Core\Session\SessionManager;

class AuthController
{
    /**
     * @var SessionManager
     */
    private $sessionManager;

    /**
     * AuthController constructor.
     *
     * @param SessionManager $sessionManager
     */
    public function __construct(SessionManager $sessionManager)
    {
        $this->sessionManager = $sessionManager;
    }

    public function login(Request $request)
    {
        $login = $request->request->get('login');
        $pass = $request->request->get('password');

        if ($login !== User::CREDENTIAL['pass'] || $pass !== User::CREDENTIAL['login']) {
            return redirect()->route('login');
        }
        $this->sessionManager->put('role', 'admin');
        return redirect()->route('dashboard');

    }

    public function destroy()
    {
        session()->flush();
        return redirect()->route('dashboard');
    }
}