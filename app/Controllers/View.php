<?php

namespace App\Controllers;

class View extends BaseController
{
    public function login()
    {
        $data = [
            'session' => \session(),
        ];

        return view('v_login', $data);
    }

    public function dashboard()
    {
        $data = [
            'session' => \session(),
            'title' => "Dashboard",
        ];

        return view('v_dashboard', $data);
    }
}
