<?php

namespace app\Http\Controllers\Admin;

use app\Core\Request;

class AuthController
{
    public function login(Request $request)
    {
        session()->put([
            'password' => $request->request->get('password'),
            'login'    => $request->request->get('login'),
        ]);

        return redirect()->to('/admin_panel');
    }

    public function destroy()
    {
        session()->flush();
        return redirect()->to('/admin_panel');
    }
}