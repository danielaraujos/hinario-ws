<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Hinos Controller
 *
 * @property \App\Model\Table\HinosTable $Hinos
 */
class InicialController extends AppController
{
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index']);
    }


    public function index()
    {

    }


}
