<?php

namespace app\Http\Admin\Controllers;

use app\Core\Request;

class AuthController
{
    public function login(Request $request)
    {
        session()->put([
            'password' => $request->request->get('password'),
            'login'    => $request->request->get('login'),
        ]);
        header('Location: ' . '/admin_panel');

        return redirect();
    }

    public function destroy()
    {
        session()->flush();
    }
}