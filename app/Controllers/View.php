<?php

namespace App\Controllers;

class View extends BaseController
{
    protected $data;

    public function __construct() {
        $this->data = array(
            'title' => 'i-Posyandu',
            'session' => session()
        );
    }

    public function login()
    {

        return view('v_login', $this->data);
    }

    public function dashboard()
    {
        $this->data['title'] = 'Dashboard';
        return view('v_dashboard', $this->data);
    }
    
    public function posyandu()
    {
        $this->data['title'] = 'Manajemen Posyandu';
        return view('v_posyandu', $this->data);
    }

    public function desa()
    {
        $this->data['title'] = 'Manajemen Desa';
        return view('v_desa', $this->data);
    }

    public function obat()
    {
        $this->data['title'] = 'Manajemen Obat';
        return view('v_obat', $this->data);
    }
}
