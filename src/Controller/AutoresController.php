<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Autores Controller
 *
 * @property \App\Model\Table\AutoresTable $Autores
 */
class AutoresController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $this->viewBuilder()->layout('ajax');
        $this->Auth->allow(['index']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = ['limit'=>150];
        $this->request->allowMethod(['get']);
        $autores = $this->paginate($this->Autores);

        $this->set(compact('autores'));
        $this->set('_serialize', ['autores']);
    }


}
