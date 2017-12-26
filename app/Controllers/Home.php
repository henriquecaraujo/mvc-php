<?php

namespace App\Controllers;

use App\Core\Controller;

class Home extends Controller
{
    protected $js = [
        'home',
    ];

    public function index($idCadastro = null)
    {
        $this->view('home/index', [
            'controllerMessage' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        ]);
    }

}
