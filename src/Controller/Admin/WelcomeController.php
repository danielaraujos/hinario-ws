<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class WelcomeController extends AppController
{
    public function index(){
        $this->set('title', 'Welcome');
        $this->set('subtitle', '');

    }
}