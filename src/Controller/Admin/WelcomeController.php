<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class WelcomeController extends AppController
{
    public function index(){
        $this->set('title', 'Index - Painel de Controle ');
        $this->set('subtitle', '');

        $this->loadModel('Hinos');
        $this->loadModel('Indices');
        $this->loadModel('Cifras');
        $this->loadModel('Users');


        $dados = [
          'hinos' => $this->Hinos->find('all')->count(),
          'indices' => $this->Indices->find('all')->count(),
          'cifras' => $this->Cifras->find('all')->count(),
          'users' => $this->Users->find('all')->count()
        ];


        $this->set(compact('dados'));




    }
}