<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class WelcomeController extends AppController
{
    public function index(){
        $this->set('title', 'Bem vindo');
        $this->set('subtitle', '');

    }
}