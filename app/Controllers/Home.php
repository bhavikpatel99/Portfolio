<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['Title'] = 'Home';
        echo view('template\header',$data);
        echo view('home');
        echo view('template\footer');
    }
}
